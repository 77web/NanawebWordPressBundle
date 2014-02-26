<?php

namespace Nanaweb\WordPressBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TermTaxonomy
 *
 * @ORM\Table(name="wp_term_taxonomy", uniqueConstraints={@ORM\UniqueConstraint(name="term_id_taxonomy", columns={"term_id", "taxonomy"})}, indexes={@ORM\Index(name="taxonomy", columns={"taxonomy"})})
 * @ORM\Entity
 */
class TermTaxonomy
{
    /**
     * @var integer
     *
     * @ORM\Column(name="term_taxonomy_id", type="bigint", options={"unsigned":true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var integer
     *
     * @ORM\Column(name="term_id", type="bigint", options={"unsigned":true}, nullable=false)
     */
    private $termId;

    /**
     * @var string
     *
     * @ORM\Column(name="taxonomy", type="string", length=32, nullable=false)
     */
    private $taxonomy;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="text", nullable=false)
     */
    private $description;

    /**
     * @var integer
     *
     * @ORM\Column(name="parent", type="bigint", options={"unsigned":true}, nullable=false)
     */
    private $parentTermTaxonomyId;

    /**
     * @var integer
     *
     * @ORM\Column(name="count", type="bigint", nullable=false)
     */
    private $count;

    /**
     * @var \Nanaweb\WordPressBundle\Entity\Term
     *
     * @ORM\ManyToOne(targetEntity="Nanaweb\WordPressBundle\Entity\Term")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="term_id", referencedColumnName="term_id")
     * })
     */
    private $term;

    /**
     * @var \Nanaweb\WordPressBundle\Entity\TermTaxonomy
     *
     * @ORM\ManyToOne(targetEntity="Nanaweb\WordPressBundle\Entity\TermTaxonomy")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="parent", referencedColumnName="term_taxonomy_id")
     * })
     */
    private $parent;


}
