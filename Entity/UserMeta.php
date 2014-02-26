<?php

namespace Nanaweb\WordPressBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * UserMeta
 *
 * @ORM\Table(name="wp_usermeta", indexes={@ORM\Index(name="user_id", columns={"user_id"}), @ORM\Index(name="meta_key", columns={"meta_key"})})
 * @ORM\Entity
 */
class UserMeta
{
    /**
     * @var integer
     *
     * @ORM\Column(name="umeta_id", type="bigint", options={"unsigned":true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var integer
     *
     * @ORM\Column(name="user_id", type="bigint", options={"unsigned":true}, nullable=false)
     */
    private $userId;

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
     * @var \Nanaweb\WordPressBundle\Entity\User
     *
     * @ORM\ManyToOne(targetEntity="Nanaweb\WordPressBundle\Entity\User")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="user_id", referencedColumnName="ID")
     * })
     */
    private $user;


}
