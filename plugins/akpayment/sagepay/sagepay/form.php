<?php defined('_JEXEC') or die(); ?>

<h3><?php echo JText::_('PLG_AKPAYMENT_SAGEPAY_FORM_HEADER') ?></h3>

<div id="payment-errors" class="alert alert-error" style="display: none;"></div>

<form id="" action="<?php echo $data->url ?>" method="post" class="form form-horizontal">
	<div class="form-horizontal">
		<div class="control-group" id="control-group-card-holder">
			<label for="card-holder" class="control-label" style="width:190px; margin-right:20px;">
				<?php echo JText::_('PLG_AKPAYMENT_SAGEPAY_FORM_CARDHOLDER') ?>
			</label>
			<div class="controls">
				<input type="text" name="card-holder" id="card-holder" class="input-large" value="<?php echo $data->cardholder ?>" />
			</div>
		</div>
		<div class="control-group" id="control-group-card-type">
			<label for="card-type" class="control-label" style="width:190px; margin-right:20px;">
				<?php echo JText::_('PLG_AKPAYMENT_SAGEPAY_FORM_CARDTYPE') ?>
			</label>
			<div class="controls">
				<?php echo $this->selectCardType(); ?>
			</div>
		</div>
		<div class="control-group" id="control-group-card-number">
			<label for="card-number" class="control-label" style="width:190px; margin-right:20px;">
				<?php echo JText::_('PLG_AKPAYMENT_SAGEPAY_FORM_CC') ?>
			</label>
			<div class="controls">
				<input type="text" name="card-number" id="card-number" class="input-large" />
			</div>
		</div>
		<div class="control-group" id="control-group-card-expiry">
			<label for="card-expiry" class="control-label" style="width:190px; margin-right:20px;">
				<?php echo JText::_('PLG_AKPAYMENT_SAGEPAY_FORM_EXPDATE') ?>
			</label>
			<div class="controls">
				<?php echo $this->selectMonth() ?><span> / </span><?php echo $this->selectYear() ?>
			</div>
		</div>
		<div class="control-group" id="control-group-card-cvc">
			<label for="card-cvc" class="control-label" style="width:190px; margin-right:20px;">
				<?php echo JText::_('PLG_AKPAYMENT_SAGEPAY_FORM_CVC') ?>
			</label>
			<div class="controls">
				<input type="text" name="card-cvc" id="card-cvc" class="input-mini" maxlength="4" />
			</div>
		</div>
	</div>

	<input type="hidden" name="currency" id="currency" value="<?php echo $data->currency ?>" />
	<input type="hidden" name="amount" id="amount" value="<?php echo $data->amount ?>" />
	<input type="hidden" name="description" id="description" value="<?php echo $data->description ?>" />
	<input type="hidden" name="callback" value="<?php echo $data->callback ?>" />
	<input type="hidden" name="callback" value="<?php echo $data->callback ?>" />

	<div class="control-group">
		<label for="pay" class="control-label" style="width:190px; margin-right:20px;">
		</label>
		<div class="controls">
			<input type="submit" id="payment-button" class="btn" value="<?php echo JText::_('PLG_AKPAYMENT_SAGEPAY_FORM_PAYBUTTON') ?>" />
		</div>
	</div>
</form>