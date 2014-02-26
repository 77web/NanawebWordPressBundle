<?php

namespace Nanaweb\WordPressBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TermRelationship
 *
 * @ORM\Table(name="wp_term_relationships", indexes={@ORM\Index(name="term_taxonomy_id", columns={"term_taxonomy_id"})})
 * @ORM\Entity
 */
class TermRelationship
{
    /**
     * @var integer
     *
     * @ORM\Column(name="object_id", type="bigint")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $objectId;

    /**
     * @var integer
     *
     * @ORM\Column(name="term_taxonomy_id", type="bigint")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $termTaxonomyId;

    /**
     * @var integer
     *
     * @ORM\Column(name="term_order", type="integer", nullable=false)
     */
    private $order;


}
