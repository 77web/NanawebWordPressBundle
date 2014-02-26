<?php

namespace Nanaweb\WordPressBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CommentMeta
 *
 * @ORM\Table(name="wp_commentmeta", indexes={@ORM\Index(name="comment_id", columns={"comment_id"}), @ORM\Index(name="meta_key", columns={"meta_key"})})
 * @ORM\Entity
 */
class CommentMeta
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
     * @ORM\Column(name="comment_id", type="bigint", nullable=false, options={"unsigned":true})
     */
    private $commentId;

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
     * @var \Nanaweb\WordPressBundle\Entity\Comment
     *
     * @ORM\ManyToOne(targetEntity="Nanaweb\WordPressBundle\Entity\Comment")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="comment_id", referencedColumnName="comment_ID")
     * })
     */
    private $comment;


}
