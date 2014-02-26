<?php

namespace Nanaweb\WordPressBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Link
 *
 * @ORM\Table(name="wp_links", indexes={@ORM\Index(name="link_visible", columns={"link_visible"})})
 * @ORM\Entity
 */
class Link
{
    /**
     * @var integer
     *
     * @ORM\Column(name="link_id", type="bigint")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="link_url", type="string", length=255, nullable=false)
     */
    private $url;

    /**
     * @var string
     *
     * @ORM\Column(name="link_name", type="string", length=255, nullable=false)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="link_image", type="string", length=255, nullable=false)
     */
    private $image;

    /**
     * @var string
     *
     * @ORM\Column(name="link_target", type="string", length=25, nullable=false)
     */
    private $target;

    /**
     * @var string
     *
     * @ORM\Column(name="link_description", type="string", length=255, nullable=false)
     */
    private $description;

    /**
     * @var string
     *
     * @ORM\Column(name="link_visible", type="string", length=20, nullable=false)
     */
    private $visible;

    /**
     * @var integer
     *
     * @ORM\Column(name="link_owner", type="bigint", nullable=false)
     */
    private $owner;

    /**
     * @var integer
     *
     * @ORM\Column(name="link_rating", type="integer", nullable=false)
     */
    private $rating;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="link_updated", type="datetime", nullable=false)
     */
    private $updated;

    /**
     * @var string
     *
     * @ORM\Column(name="link_rel", type="string", length=255, nullable=false)
     */
    private $rel;

    /**
     * @var string
     *
     * @ORM\Column(name="link_notes", type="text", nullable=false)
     */
    private $note;

    /**
     * @var string
     *
     * @ORM\Column(name="link_rss", type="string", length=255, nullable=false)
     */
    private $rss;


}
