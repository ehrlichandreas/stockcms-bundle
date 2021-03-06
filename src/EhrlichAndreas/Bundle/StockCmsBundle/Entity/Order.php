<?php

namespace EhrlichAndreas\Bundle\StockCmsBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * EhrlichAndreas\Bundle\StockCmsBundle\Entity\Order
 *
 * @ORM\Entity()
 * @ORM\Table(name="stock_order")
 *
 * @author Andreas Ehrlich
 */
class Order
{
	/**
	 * @ORM\Id
	 * @ORM\Column(type="bigint")
	 * @ORM\GeneratedValue(strategy="AUTO")
	 */
	protected $order_id;

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
	protected $customer_id;

	/**
	 * @ORM\Column(type="bigint", nullable=false, options={"default": "0"})
	 */
	protected $cart_id;

	/**
	 * @ORM\Column(type="decimal", precision=17, scale=2, nullable=false, options={"default": "0.00"})
	 */
	protected $total;

	/**
	 * @ORM\Column(type="decimal", precision=17, scale=2, nullable=false, options={"default": "0.00"})
	 */
	protected $total_paid;

	/**
	 * @ORM\Column(type="integer", nullable=false, options={"default": "0"})
	 */
	protected $return;

	/**
	 * @ORM\Column(type="datetime", nullable=false, options={"default": "0001-01-01 00:00:00"})
	 */
	protected $invoice_date;

	/**
	 * @ORM\Column(type="datetime", nullable=false, options={"default": "0001-01-01 00:00:00"})
	 */
	protected $delivery_date;
}