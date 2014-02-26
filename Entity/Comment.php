<?php

namespace Nanaweb\WordPressBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Comment
 *
 * @ORM\Table(name="wp_comments", indexes={@ORM\Index(name="comment_post_ID", columns={"comment_post_ID"}), @ORM\Index(name="comment_approved_date_gmt", columns={"comment_approved", "comment_date_gmt"}), @ORM\Index(name="comment_date_gmt", columns={"comment_date_gmt"}), @ORM\Index(name="comment_parent", columns={"comment_parent"})})
 * @ORM\Entity
 */
class Comment
{
    /**
     * @var integer
     *
     * @ORM\Column(name="comment_ID", type="bigint", options={"unsigned":true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var integer
     *
     * @ORM\Column(name="comment_post_ID", type="bigint", options={"unsigned":true}, nullable=false)
     */
    private $postId;

    /**
     * @var string
     *
     * @ORM\Column(name="comment_author", type="text", nullable=false)
     */
    private $author;

    /**
     * @var string
     *
     * @ORM\Column(name="comment_author_email", type="string", length=100, nullable=false)
     */
    private $authorEmail;

    /**
     * @var string
     *
     * @ORM\Column(name="comment_author_url", type="string", length=200, nullable=false)
     */
    private $authorUrl;

    /**
     * @var string
     *
     * @ORM\Column(name="comment_author_IP", type="string", length=100, nullable=false)
     */
    private $authorIp;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="comment_date", type="datetime", nullable=false)
     */
    private $created;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="comment_date_gmt", type="datetime", nullable=false)
     */
    private $createdGmt;

    /**
     * @var string
     *
     * @ORM\Column(name="comment_content", type="text", nullable=false)
     */
    private $content;

    /**
     * @var integer
     *
     * @ORM\Column(name="comment_karma", type="integer", nullable=false)
     */
    private $karma;

    /**
     * @var string
     *
     * @ORM\Column(name="comment_approved", type="string", length=20, nullable=false)
     */
    private $approved;

    /**
     * @var string
     *
     * @ORM\Column(name="comment_agent", type="string", length=255, nullable=false)
     */
    private $agent;

    /**
     * @var string
     *
     * @ORM\Column(name="comment_type", type="string", length=20, nullable=false)
     */
    private $type;

    /**
     * @var integer
     *
     * @ORM\Column(name="comment_parent", type="bigint", options={"unsigned":true}, nullable=false)
     */
    private $parentId;

    /**
     * @var integer
     *
     * @ORM\Column(name="user_id", type="bigint", options={"unsigned":true}, nullable=false)
     */
    private $userId;

    /**
     * @var \Nanaweb\WordPressBundle\Entity\Comment
     *
     * @ORM\ManyToOne(targetEntity="Nanaweb\WordPressBundle\Entity\Comment")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="comment_parent", referencedColumnName="comment_ID")
     * })
     */
    private $parent;

    /**
     * @var \Nanaweb\WordPressBundle\Entity\Post
     *
     * @ORM\ManyToOne(targetEntity="Nanaweb\WordPressBundle\Entity\Post")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="comment_post_ID", referencedColumnName="ID")
     * })
     */
    private $post;

    /**
     * @var \Nanaweb\WordPressBundle\Entity\User
     *
     * @ORM\ManyToOne(targetEntity="Nanaweb\WordPressBundle\Entity\User")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="user_id", referencedColumnName="id")
     * })
     */
    private $user;


}
