<?php

namespace Nanaweb\WordPressBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Post
 *
 * @ORM\Table(name="wp_posts", indexes={@ORM\Index(name="post_name", columns={"post_name"}), @ORM\Index(name="type_status_date", columns={"post_type", "post_status", "post_date", "ID"}), @ORM\Index(name="post_parent", columns={"post_parent"}), @ORM\Index(name="post_author", columns={"post_author"})})
 * @ORM\Entity
 */
class Post
{
    /**
     * @var integer
     *
     * @ORM\Column(name="ID", type="bigint")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var integer
     *
     * @ORM\Column(name="post_author", type="bigint", nullable=false)
     */
    private $userId;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="post_date", type="datetime", nullable=false)
     */
    private $published;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="post_date_gmt", type="datetime", nullable=false)
     */
    private $publishedGmt;

    /**
     * @var string
     *
     * @ORM\Column(name="post_content", type="text", nullable=false)
     */
    private $content;

    /**
     * @var string
     *
     * @ORM\Column(name="post_title", type="text", nullable=false)
     */
    private $title;

    /**
     * @var string
     *
     * @ORM\Column(name="post_excerpt", type="text", nullable=false)
     */
    private $excerpt;

    /**
     * @var string
     *
     * @ORM\Column(name="post_status", type="string", length=20, nullable=false)
     */
    private $status;

    /**
     * @var string
     *
     * @ORM\Column(name="comment_status", type="string", length=20, nullable=false)
     */
    private $commentStatus;

    /**
     * @var string
     *
     * @ORM\Column(name="ping_status", type="string", length=20, nullable=false)
     */
    private $pingStatus;

    /**
     * @var string
     *
     * @ORM\Column(name="post_password", type="string", length=20, nullable=false)
     */
    private $password;

    /**
     * @var string
     *
     * @ORM\Column(name="post_name", type="string", length=200, nullable=false)
     */
    private $slug;

    /**
     * @var string
     *
     * @ORM\Column(name="to_ping", type="text", nullable=false)
     */
    private $toPing;

    /**
     * @var string
     *
     * @ORM\Column(name="pinged", type="text", nullable=false)
     */
    private $pinged;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="post_modified", type="datetime", nullable=false)
     */
    private $modified;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="post_modified_gmt", type="datetime", nullable=false)
     */
    private $modifiedGmt;

    /**
     * @var string
     *
     * @ORM\Column(name="post_content_filtered", type="text", nullable=false)
     */
    private $contentFiltered;

    /**
     * @var integer
     *
     * @ORM\Column(name="post_parent", type="bigint", nullable=false)
     */
    private $parentId;

    /**
     * @var string
     *
     * @ORM\Column(name="guid", type="string", length=255, nullable=false)
     */
    private $guid;

    /**
     * @var integer
     *
     * @ORM\Column(name="menu_order", type="integer", nullable=false)
     */
    private $menuOrder;

    /**
     * @var string
     *
     * @ORM\Column(name="post_type", type="string", length=20, nullable=false)
     */
    private $type;

    /**
     * @var string
     *
     * @ORM\Column(name="post_mime_type", type="string", length=100, nullable=false)
     */
    private $mimeType;

    /**
     * @var integer
     *
     * @ORM\Column(name="comment_count", type="bigint", nullable=false)
     */
    private $commentCount;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\OneToMany(targetEntity="Nanaweb\WordPressBundle\Entity\PostMeta", mappedBy="post")
     */
    private $metas;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\OneToMany(targetEntity="Nanaweb\WordPressBundle\Entity\Comment", mappedBy="post")
     */
    private $comments;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\OneToMany(targetEntity="Nanaweb\WordPressBundle\Entity\Post", mappedBy="parentPost")
     */
    private $childrenPosts;

    /**
     * @var \Nanaweb\WordPressBundle\Entity\User
     *
     * @ORM\ManyToOne(targetEntity="Nanaweb\WordPressBundle\Entity\User")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="post_author", referencedColumnName="id")
     * })
     */
    private $author;

    /**
     * @var \Nanaweb\WordPressBundle\Entity\Post
     *
     * @ORM\ManyToOne(targetEntity="Nanaweb\WordPressBundle\Entity\Post")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="post_parent", referencedColumnName="ID")
     * })
     */
    private $parentPost;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->metas = new \Doctrine\Common\Collections\ArrayCollection();
        $this->comments = new \Doctrine\Common\Collections\ArrayCollection();
        $this->childrenPosts = new \Doctrine\Common\Collections\ArrayCollection();
    }

}
