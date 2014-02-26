<?php

namespace Nanaweb\WordPressBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Option
 *
 * @ORM\Table(name="wp_options", uniqueConstraints={@ORM\UniqueConstraint(name="option_name", columns={"option_name"})})
 * @ORM\Entity
 */
class Option
{
    /**
     * @var integer
     *
     * @ORM\Column(name="option_id", type="bigint")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="option_name", type="string", length=64, nullable=false)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="option_value", type="text", nullable=false)
     */
    private $value;

    /**
     * @var string
     *
     * @ORM\Column(name="autoload", type="string", length=20, nullable=false)
     */
    private $autoload;


}
