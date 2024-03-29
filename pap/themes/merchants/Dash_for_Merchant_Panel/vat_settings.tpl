<!-- vat_settings -->

<div class="FormFieldset VatForm">
	<div class="FormFieldsetHeader">
		<div class="FormFieldsetHeaderTitle">##VAT settings##</div>
		<div class="FormFieldsetHeaderDescription"></div>
	</div>
  {widget id="support_vat" class="VatSettingsForm"}
  {widget id="vat_percentage"}
  {widget id="vat_computation"}
</div>

<div class="FormFieldset">
	<div class="FormFieldsetHeader">
		<div class="FormFieldsetHeaderTitle">##Payout invoice - VAT version##</div>
		<div class="FormFieldsetHeaderDescription">##HTML format of the invoice for users with VAT applicable.##
##You can use Smarty syntax in this template and the constants from the list below.##</div>
	</div>
  <div class="InvoiceEditor">
  {widget id="payout_invoice_with_vat"}
  </div>
  <div class="FormFieldLabel"><div class="Inliner">##Payout preview##</div></div>
  <div class="FormFieldInputContainer">
      <div class="FormFieldInput">{widget id="userid"}</div>
      <div class="FormFieldHelp">{widget id="previewInvoiceHelp"}</div>
      <div>{widget id="previewInvoiceWithVat"}</div>
      {widget id="formPanel"}
      <div class="FormFieldDescription">
          ##By clicking Preview invoice you can see how the invoice will look like for the specified affiliate.##
      </div>
  </div>
  <div class="clear"/></div>  
</div>
<div class="pad_left pad_top">
{widget id="FormMessage"}
{widget id="SaveButton"}
</div>
<div class="clear"></div>
