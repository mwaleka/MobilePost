<?php

namespace ParcelBundle\Repository;
use Symfony\Component\HttpFoundation\Request;

/**
 * ParcelRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class ParcelRepository extends \Doctrine\ORM\EntityRepository
{
	public function find($id)
	{
		return $this->getEntityManager()
		->createQuery("SELECT p FROM ParcelBundle:Parcel p WHERE p.id = " . $id)
		->getResult();
	}
}