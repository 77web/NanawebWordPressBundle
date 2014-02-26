<?php

namespace Nanaweb\WordPressBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * User
 *
 * @ORM\Table(name="wp_users", indexes={@ORM\Index(name="user_login_key", columns={"user_login"}), @ORM\Index(name="user_nicename", columns={"user_nicename"})})
 * @ORM\Entity
 */
class User
{
    /**
     * @var integer
     *
     * @ORM\Column(name="ID", type="bigint", options={"unsigned":true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="user_login", type="string", length=60, nullable=false)
     */
    private $username;

    /**
     * @var string
     *
     * @ORM\Column(name="user_pass", type="string", length=64, nullable=false)
     */
    private $password;

    /**
     * @var string
     *
     * @ORM\Column(name="user_nicename", type="string", length=50, nullable=false)
     */
    private $nicename;

    /**
     * @var string
     *
     * @ORM\Column(name="user_email", type="string", length=100, nullable=false)
     */
    private $email;

    /**
     * @var string
     *
     * @ORM\Column(name="user_url", type="string", length=100, nullable=false)
     */
    private $url;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="user_registered", type="datetime", nullable=false)
     */
    private $registered;

    /**
     * @var string
     *
     * @ORM\Column(name="user_activation_key", type="string", length=60, nullable=false)
     */
    private $activationKey;

    /**
     * @var integer
     *
     * @ORM\Column(name="user_status", type="integer", nullable=false)
     */
    private $status;

    /**
     * @var string
     *
     * @ORM\Column(name="display_name", type="string", length=250, nullable=false)
     */
    private $displayName;


}
