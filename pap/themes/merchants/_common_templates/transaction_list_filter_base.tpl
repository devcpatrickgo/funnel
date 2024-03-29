<!-- transaction_list_filter_base -->

			<div class="TransactionsFilter">
				<div class="ColumnFieldset">
					<fieldset class="Filter FilterCampaign">
					<legend>##Campaign##</legend>
					<div class="Resize">
					{widget id="campaignid"} 
					</div>
					</fieldset> 
            	</div>

				<fieldset class="Filter FilterDate">
					<legend>##Date created##</legend>
					<div class="Resize">
            		{widget id="dateinserted"}
            		</div>
            	</fieldset>

            	<fieldset class="Filter FilterOrder">
            		<legend>##Order ID##</legend>
            		<div class="Resize">
            		{widget id="orderId"}
            		</div>
            		<div class="FilterInfo">##You can input multiple order IDs separated either by new line or comma, use '%' for like search##</div>
            		</fieldset>

				<fieldset class="Filter FilterStatus">
					<legend>##Status##</legend>
					<div class="Resize">
            		{widget id="rstatus"}
            		</div>
            	</fieldset>
            
            	<fieldset class="Filter FilterType">
					<legend>##Type##</legend>
					<div class="Resize">
            		{widget id="rtype"}
            		</div>
            	</fieldset>
			
                <fieldset class="Filter FilterType">
                    <legend>##Tracked by##</legend>
                    <div class="Resize">
                    {widget id="trackmethod"}
                    </div>
                </fieldset>
                
                <fieldset class="Filter FilterType">
                    <legend>##Payout status##</legend>
                    <div class="Resize">
                    {widget id="payoutstatus"}
                    </div>
                </fieldset>

				<fieldset class="Filter FilterCustom">
            	<legend>##Custom##</legend>
            	<div class="Resize">
            	{widget id="custom"}
            	</div>
            	</fieldset>
            </div>
            <div style="clear: both;"></div>
