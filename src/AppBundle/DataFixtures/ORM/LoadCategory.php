<?php
/**
 * Created by PhpStorm.
 * User: m.benahmed
 * Date: 18/05/2017
 * Time: 17:06
 */

namespace AppBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use AppBundle\Entity\Category;

class LoadCategory implements FixtureInterface
{



    public function load(ObjectManager $em){

        // Liste des noms de catégorie à ajouter
        $names = array(
            array('Développement web',"D'après le dernier bulletin mensuel de Pôle emploi, le nombre de demandeurs d'emploi est en baisse chez les développeurs et informaticiens, aussi bien chez les sans-emploi que ceux qui ont une activité réduite. Sur un an par contre, le nombre de demandeurs d'emploi est en hausse de 4,5 %"),
            array('Développement mobile',"D'après le dernier bulletin mensuel de Pôle emploi, le nombre de demandeurs d'emploi est en baisse chez les développeurs et informaticiens, aussi bien chez les sans-emploi que ceux qui ont une activité réduite. Sur un an par contre, le nombre de demandeurs d'emploi est en hausse de 4,5 %"),
            array('Graphisme',"D'après le dernier bulletin mensuel de Pôle emploi, le nombre de demandeurs d'emploi est en baisse chez les développeurs et informaticiens, aussi bien chez les sans-emploi que ceux qui ont une activité réduite. Sur un an par contre, le nombre de demandeurs d'emploi est en hausse de 4,5 %"),
            array('Intégration',"D'après le dernier bulletin mensuel de Pôle emploi, le nombre de demandeurs d'emploi est en baisse chez les développeurs et informaticiens, aussi bien chez les sans-emploi que ceux qui ont une activité réduite. Sur un an par contre, le nombre de demandeurs d'emploi est en hausse de 4,5 %"),
            array('Réseau',"D'après le dernier bulletin mensuel de Pôle emploi, le nombre de demandeurs d'emploi est en baisse chez les développeurs et informaticiens, aussi bien chez les sans-emploi que ceux qui ont une activité réduite. Sur un an par contre, le nombre de demandeurs d'emploi est en hausse de 4,5 %")
        );

        foreach ($names as $name) {
            // On crée la catégorie
            $category = new Category();
            $category->setNom($name[0]);
            $category->setDescription($name[1]);

            // On la persiste
            $em->persist($category);
        }

        // On déclenche l'enregistrement de toutes les catégories
        $em->flush();


    }
}