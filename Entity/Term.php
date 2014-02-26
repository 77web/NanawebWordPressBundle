<?php

namespace Nanaweb\WordPressBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Term
 *
 * @ORM\Table(name="wp_terms", uniqueConstraints={@ORM\UniqueConstraint(name="slug", columns={"slug"})}, indexes={@ORM\Index(name="name", columns={"name"})})
 * @ORM\Entity
 */
class Term
{
    /**
     * @var integer
     *
     * @ORM\Column(name="term_id", type="bigint")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=200, nullable=false)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="slug", type="string", length=200, nullable=false)
     */
    private $slug;

    /**
     * @var integer
     *
     * @ORM\Column(name="term_group", type="bigint", nullable=false)
     */
    private $termGroup;


}
