<?php

namespace Nanaweb\WordPressBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PostMeta
 *
 * @ORM\Table(name="wp_postmeta", indexes={@ORM\Index(name="post_id", columns={"post_id"}), @ORM\Index(name="meta_key", columns={"meta_key"})})
 * @ORM\Entity
 */
class PostMeta
{
    /**
     * @var integer
     *
     * @ORM\Column(name="meta_id", type="bigint", options={"unsigned":true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var integer
     *
     * @ORM\Column(name="post_id", type="bigint", options={"unsigned":true}, nullable=false)
     */
    private $postId;

    /**
     * @var string
     *
     * @ORM\Column(name="meta_key", type="string", length=255, nullable=true)
     */
    private $key;

    /**
     * @var string
     *
     * @ORM\Column(name="meta_value", type="text", nullable=true)
     */
    private $value;

    /**
     * @var \Nanaweb\WordPressBundle\Entity\Post
     *
     * @ORM\ManyToOne(targetEntity="Nanaweb\WordPressBundle\Entity\Post")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="post_id", referencedColumnName="ID")
     * })
     */
    private $post;


}
