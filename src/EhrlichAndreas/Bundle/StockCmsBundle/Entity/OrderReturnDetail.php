<?php

namespace EhrlichAndreas\Bundle\StockCmsBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * EhrlichAndreas\Bundle\StockCmsBundle\Entity\OrderReturnDetail
 *
 * @ORM\Entity()
 * @ORM\Table(name="stock_order_return_detail")
 *
 * @author Andreas Ehrlich
 */
class OrderReturnDetail
{
	/**
	 * @ORM\Id
	 * @ORM\Column(type="bigint")
	 * @ORM\GeneratedValue(strategy="AUTO")
	 */
	protected $order_return_detail_id;

	/**
	 * @ORM\Column(type="datetime", nullable=false, options={"default": "0001-01-01 00:00:00"})
	 */
	protected $published;

	/**
	 * @ORM\Column(type="datetime", nullable=false, options={"default": "0001-01-01 00:00:00"})
	 */
	protected $updated;

	/**
	 * @ORM\Column(type="integer", nullable=false, options={"default": "0"})
	 */
	protected $enabled;

	/**
	 * @ORM\Column(type="bigint", nullable=false, options={"default": "0"})
	 */
	protected $order_id;

	/**
	 * @ORM\Column(type="bigint", nullable=false, options={"default": "0"})
	 */
	protected $customer_id;

	/**
	 * @ORM\Column(type="bigint", nullable=false, options={"default": "0"})
	 */
	protected $product_id;

	/**
	 * @ORM\Column(type="bigint", nullable=false, options={"default": "0"})
	 */
	protected $order_detail_id;

	/**
	 * @ORM\Column(type="bigint", nullable=false, options={"default": "0"})
	 */
	protected $order_return_id;

	/**
	 * @ORM\Column(type="bigint", nullable=false, options={"default": "0"})
	 */
	protected $product_quantity;

	/**
	 * @ORM\Column(type="bigint", nullable=false, options={"default": "0"})
	 */
	protected $extern_id;

	/**
	 * @ORM\Column(type="bigint", nullable=false, options={"default": "0"})
	 */
	protected $extern_id_type;
}