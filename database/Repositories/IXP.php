<?php

namespace Repositories;

use Doctrine\ORM\EntityRepository;

/**
 * IXP
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class IXP extends EntityRepository
{
    /**
     * The cache key for the default IXP
     * @var string The cache key for the default IXP
     */
    const CACHE_KEY_DEFAULT_IXP = 'ixp_default';
    
    /**
     * Return the default IXP (i.e. the one with database id 1)
     *
     * @throws \IXP_Exception
     * @return \Entities\IXP $ixp The default IXP
     */
    public function getDefault()
    {
        $ixp = $this->getEntityManager()->createQuery(
                "SELECT ixp
                    FROM Entities\\IXP ixp
                    WHERE ixp.id = 1"
            )
            ->useResultCache( true, 7200, self::CACHE_KEY_DEFAULT_IXP )
            ->getResult();
        
        if( !$ixp )
        {
            // uh oh, inconsistency
            throw new \IXP_Exception( 'We could not load the default IXP which should have ID 1' );
        }
        
        return $ixp[0];
    }

    /**
     * Return an array of all IXP objects linked to the given customer
     *
     * @param  \Entities\Customer $customer The customer to limit results to
     * @return \Entities\IXP[] An array of all IXP objects for the given customer
     */
    public function getForCustomer( $customer )
    {
        $dql = "SELECT i FROM Entities\\IXP i WHERE :cust MEMBER OF i.Customers ORDER BY i.name ASC";

        return $this->getEntityManager()->createQuery( $dql )
            ->setParameter( 'cust', $customer )
            ->getResult();
    }
    
    /**
     * Return an array of all IXP names where the array key is the IXP id.
     *
     * NOTE: Super user can see all IXPs and customer user can see only those which
     *         is assigned to the users customer.
     *
     * @param  \Entities\User $user User to limit IXP names
     * @return array An array of all IXP names with the IXP id as the key.
     */
    public function getNames( $user )
    {
        $dql = "SELECT i.id AS id, i.name AS name FROM Entities\\IXP i";

        if( $user->getPrivs() != \Entities\User::AUTH_SUPERUSER )
            $dql .= " WHERE ?1 MEMBER OF i.Customers";

        $dql .= " ORDER BY name ASC";
        
        $query = $this->getEntityManager()->createQuery( $dql );

        if( $user->getPrivs() != \Entities\User::AUTH_SUPERUSER )
            $query->setParameter( 1, $user->getCustomer()->getId() );

        $aixps = $query->getResult();
        
        $ixps = [];
        foreach( $aixps as $i )
            $ixps[ $i['id'] ] = $i['name'];
        
        return $ixps;
    }

    /**
     * Return an array of all ixp names which are not related with given Customer where the array key is the IXP id.
     *
     * @param int $custid Customer id for filtering results
     * @return array An array of IXP names with the ixp id as the key.
     */
    public function getNamesNotAssignedToCustomer( $custid )
    {
        $aixps = $this->getEntityManager()->createQuery(
            "SELECT i.id AS id, i.name AS name FROM Entities\\IXP i WHERE ?1 NOT MEMBER OF i.Customers ORDER BY name ASC"
        )->setParameter( 1, $custid )->getResult();
        
        $ixps = [];
        foreach( $aixps as $i )
            $ixps[ $i['id'] ] = $i['name'];
        
        return $ixps;
    }


    /**
     * Get all ixp (or a particular one) for listing on the frontend CRUD
     *
     * @see \IXP\Http\Controller\Doctrine2Frontend
     *
     *
     * @param \stdClass $feParams
     * @param int|null $id
     * @return array Array of ixp (as associated arrays) (or single element if `$id` passed)
     */
    public function getAllForFeList( \stdClass $feParams, int $id = null )
    {
        $dql = "SELECT  i.id AS id, i.name AS name, 
                        i.shortname AS shortname, i.address1 AS address1, i.address2 AS address2,
                        i.address3 AS address3, i.address4 AS address4, i.country AS country
                FROM Entities\\IXP i
                WHERE 1 = 1";

        if( $id ) {
            $dql .= " AND i.id = " . (int)$id;
        }

        if( isset( $feParams->listOrderBy ) ) {
            $dql .= " ORDER BY " . $feParams->listOrderBy . ' ';
            $dql .= isset( $feParams->listOrderByDir ) ? $feParams->listOrderByDir : 'ASC';
        }

        $query = $this->getEntityManager()->createQuery( $dql );

        return $query->getArrayResult();
    }
    
}