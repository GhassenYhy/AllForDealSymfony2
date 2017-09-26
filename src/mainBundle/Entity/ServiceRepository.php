<?php

namespace mainBundle\Entity;

use Doctrine\ORM\EntityRepository;

/**
 * PatientRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class ServiceRepository extends EntityRepository
{
   public function myFindAll($i){
        $query = $this->createQueryBuilder('p')
               ->orderBy('p.date', 'ASC')
               ->setFirstResult($i)
               ->setMaxResults(6)
               ->getQuery();
        return $query->getResult();
    }
    
     public function myFindByLibelle($libelle){
        $query = $this->createQueryBuilder('p')
               ->where('p.libelle LIKE :libelle')
               ->setParameters(array('libelle'=>'%'.$libelle.'%'))
               ->orderBy('p.date', 'ASC')
               ->getQuery();
        return $query->getResult();
    }
    
       public function myFiltreFindService($libelle,$cat,$dmin,$dmax,$gouvernorat){
        $query = $this->createQueryBuilder('p')
               ->where('p.libelle LIKE :libelle')
               ->andWhere('p.idcategorie = :cat')
              
                  
          
               ->setParameters(array('libelle'=>'%'.$libelle.'%','cat'=>$cat))
               ->orderBy('p.date', 'ASC')
               ->getQuery();
        return $query->getResult();
    }
    
     public function myFiltreFindServiceAll($libelle,$dmin,$dmax,$gouvernorat){
        $query = $this->createQueryBuilder('p')
               ->where('p.libelle LIKE :libelle')
           
              
                 
               ->setParameters(array('libelle'=>'%'.$libelle.'%'))
               ->orderBy('p.date', 'ASC')
               ->getQuery();
        return $query->getResult();
    }
    
      public function myFiltreFindServiceMax($libelle,$cat,$dmin,$dmax,$gouvernorat,$i){
        $query = $this->createQueryBuilder('p')
               ->where('p.libelle LIKE :libelle')
               ->andWhere('p.idcategorie = :cat')
              
               
               ->setParameters(array('libelle'=>'%'.$libelle.'%','cat'=>$cat))
               ->orderBy('p.date', 'ASC')
               ->setFirstResult($i)
               ->setMaxResults(6)
               ->getQuery();
        return $query->getResult();
    }
     public function myFiltreFindServiceMaxALL($libelle,$dmin,$dmax,$gouvernorat,$i){
        $query = $this->createQueryBuilder('p')
               ->where('p.libelle LIKE :libelle')
   
              
              
               ->setParameters(array('libelle'=>'%'.$libelle.'%'))
               ->orderBy('p.date', 'ASC')
               ->setFirstResult($i)
               ->setMaxResults(6)
               ->getQuery();
        return $query->getResult();
    }
         public function myFindByCategorie($id){
        $query = $this->createQueryBuilder('p')
               ->where('p.idcategorie = :id')
               ->setParameters(array('id'=>$id))
               ->orderBy('p.date', 'ASC')
               ->getQuery();
        return $query->getResult();
    }
    
         public function myCountByCategorie($id){
        $query = $this->createQueryBuilder('p')
               ->where('p.idcategorie = :id')
               ->setParameters(array('id'=>$id))
               ->orderBy('p.date', 'ASC')
               ->getQuery();
        return $query->getResult();
    }
    
     public function myFindByLibelleMax($libelle,$i){
        $query = $this->createQueryBuilder('p')
               ->where('p.libelle LIKE :libelle')
               ->setParameters(array('libelle'=>'%'.$libelle.'%'))
               ->orderBy('p.date', 'ASC')
               ->setFirstResult($i)
               ->setMaxResults(6)
               ->getQuery();
        return $query->getResult();
    }
    
        public function myFindByCategorieMax($id,$i){
        $query = $this->createQueryBuilder('p')
               ->where('p.idcategorie = :id')
               ->setParameters(array('id'=>$id))
               ->orderBy('p.date', 'ASC')
               ->setFirstResult($i)
               ->setMaxResults(6)
               ->getQuery();
        return $query->getResult();
    }
}