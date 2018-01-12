<?php
/**
 * @package     Joomla.Site
 * @subpackage  com_contact
 *
 * @copyright   Copyright (C) 2005 - 2014 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('_JEXEC') or die;

/**
 * marker_class: Class based on the selection of text, none, or icons
 * jicon-text, jicon-none, jicon-icon
 */
?>
<dl class="contact-address dl-horizontal" itemprop="address" itemscope itemtype="http://schema.org/PostalAddress">
	<?php if (($this->params->get('address_check') > 0) &&
		($this->contact->address || $this->contact->suburb  || $this->contact->state || $this->contact->country || $this->contact->postcode)) : ?>
		<?php if ($this->params->get('address_check') > 0) : ?>
			<dt>
				<span class="<?php echo $this->params->get('marker_class'); ?>" >
					<?php echo '<i class="uk-icon-map-marker"></i>'; ?>
				</span>
			</dt>
		<?php endif; ?>

		<?php if ($this->contact->address && $this->params->get('show_street_address')) : ?>
			<dd>
				<span class="contact-street" itemprop="streetAddress">
					<?php echo $this->contact->address .'<br/>'; ?>
				</span>
			</dd>
		<?php endif; ?>

		<?php if ($this->contact->postcode && $this->params->get('show_postcode')) : ?>
		<?php if ($this->contact->postcode && $this->params->get('show_suburb')) : ?>
			<dd>
				<div><span class="contact-postcode" itemprop="postalCode">
					<?php echo $this->contact->postcode .''; ?>
				</span>
				<span class="contact-suburb" itemprop="addressLocality">
					<?php echo $this->contact->suburb .''; ?>
				</span></div>

			</dd>
			<?php endif; ?>
		<?php endif; ?>
		<?php if ($this->contact->state && $this->params->get('show_state')) : ?>
			<dd>
				<span class="contact-state" itemprop="addressRegion">
					<?php echo $this->contact->state . '<br/>'; ?>
				</span>
			</dd>
		<?php endif; ?>
		
		<?php if ($this->contact->country && $this->params->get('show_country')) : ?>
		<dd>
			<span class="contact-country" itemprop="addressCountry">
				<?php echo $this->contact->country .'<br/>'; ?>
			</span>
		</dd><br>
		<?php endif; ?>

	<?php endif; ?>



<?php if ($this->contact->telephone && $this->params->get('show_telephone')) : ?>
	<dt>
		<span class="<?php echo $this->params->get('marker_class'); ?>" >
			<?php echo '<i class="uk-icon-phone"></i>'; ?>
		</span>
	</dt>
	<dd>
		<span class="contact-telephone" itemprop="telephone">
			<?php echo nl2br($this->contact->telephone); ?>
		</span>
	</dd>
<?php endif; ?>
<?php if ($this->contact->fax && $this->params->get('show_fax')) : ?>
	<dt>
		<span class="<?php echo $this->params->get('marker_class'); ?>">
			<?php echo '<i class="uk-icon-fax"></i>'; ?>
		</span>
	</dt>
	<dd>
		<span class="contact-fax" itemprop="faxNumber">
		<?php echo nl2br($this->contact->fax); ?>
		</span>
	</dd>
<?php endif; ?>
<?php if ($this->contact->mobile && $this->params->get('show_mobile')) :?>
	<dt>
		<span class="<?php echo $this->params->get('marker_class'); ?>" >
			<?php echo '<i class="uk-icon-mobile uk-icon-small"></i>'; ?>
		</span>
	</dt>
	<dd>
		<span class="contact-mobile" itemprop="telephone">
			<?php echo nl2br($this->contact->mobile); ?>
		</span>
	</dd>
<?php endif; ?>

<?php if ($this->contact->email_to && $this->params->get('show_email')) : ?>
	<dt>
		<span class="<?php echo $this->params->get('marker_class'); ?>" itemprop="email">
			<?php echo '<i class="uk-icon-envelope-o"></i>'; ?>
		</span>
	</dt>
	<dd>
		<span class="contact-emailto">
			<?php echo $this->contact->email_to; ?>
		</span>
	</dd>
<?php endif; ?>
<?php if ($this->contact->webpage && $this->params->get('show_webpage')) : ?>
	<dt>
		<span class="<?php echo $this->params->get('marker_class'); ?>" >
		</span>
	</dt>
	<dd>
		<span class="contact-webpage">
			<a href="<?php echo $this->contact->webpage; ?>" target="_blank" itemprop="url">
			<?php echo JStringPunycode::urlToUTF8($this->contact->webpage); ?></a>
		</span>
	</dd>
<?php endif; ?>
</dl>
