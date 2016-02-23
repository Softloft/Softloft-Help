<!--bank dashboard-->

<div class="col-xs-12 help">
	<span class="anchor" id="bank_dash_scroll"></span>
	<div class="row">
		<div class="panel panel-primary">
			<div class="panel-heading">
				<h1>Bank dashboard overview</h1>
			</div>
		</div>
	</div>
	<div class="row help-body"><p class="lead">In this help guide we will go through the bank statement dashboard
			elements</p>

		<div class="help-steps">
			<div class="help-step">
				<h2>Bank statement dashboard</h2>
				<img src="/img/help/low_bank-statement-dashboard.png" data-src="/img/help/bank-statement-dashboard.png" alt="Bank Statement Dashboard"
					 title="Bank Statement Dashboard"
					 class="help-image"/>

				<div class="help-instructions">
					<p>&nbsp;</p>
					<p><span style="text-decoration:underline">The below numbers correspond to the numbers above for each element in the bank statement dashboard</span>
					</p>
					<ol>
						<li>Navigate to the bank statement dashboard by clicking on &quot;Bank&quot; and then
							&quot;Dashboard&quot;.
						</li>
						<li>Edit and delete bank statement matching rules.</li>
						<li>Summary of your bank account information for easy referencing:
							<ul>
								<li>Name of your bank.</li>
								<li>Bank account name.</li>
								<li>Bank account number.</li>
							</ul>
						</li>
						<li>Summary of the value of your transactions that have been allocated or unallocated and
							your estimated bank balance.
							<ul>
								<li>For example: you upload or manually input your bank statements with 1
									transaction, this transaction has a value of $100, this will fall under the
									&quot;Unallocated Total&quot;. When you allocate the transaction via the
									reconcile screen in number 7 this amount will move to &quot;Allocated Total&quot;.
								</li>
								<li>The &quot;Estimated bank balance&quot; should agree to the balance on your bank
									statement.
								</li>
							</ul>
						</li>
						<li>The latest date of the last bank statement that you uploaded.
							<ul>
								<li>For example: you upload a bank statement from 1 July 2015 to 4 August 2015. The
									date stipulated will be 2015-08-04. This will assist you with the next bank
									statement to be uploaded, as you will know that you will need to upload a bank
									statement from 5 August 2015 to current date.
								</li>
							</ul>
						</li>
						<li> The are 2 ways to upload your bank statements.
							<ul>
								<li>You can drag the file from your computer onto your bank account block, or</li>
								<li>You can click the &quot;Choose File&quot; button, locate the bank statement file
									on your computer and upload it.
								</li>
							</ul>
						</li>
						<li>Click this button when you have uploaded your bank statements and want to reconcile the
							transactions.
						</li>
						<li>Manually input your bank statement transaction.</li>
						<li>From the actions menu you can click:
							<ul>
								<li>&quot;Edit&quot;: This option will let you edit your bank account details. You
									can also unreconcile and delete a bank statement that you may have accidentally
									uploaded. When you unreconcile and delete a statement the system will
									unreconcile any transactions that you may have allocated on the particular bank
									statement upload and will then delete the bank statement.
								</li>
								<li>&quot;Export to CSV&quot;: This option will let you export the unreconciled
									transactions to an excel csv file.
								</li>
							</ul>
						</li>
						<li>Setup a new bank account on Softloft.</li>
					</ol>
					<p>&nbsp;</p>
				</div>
			</div>
		</div>
	</div>
</div>

<!--upload bank statements-->

<div class="col-xs-12 help">
	<span class="anchor" id="upload_bank_scroll"></span>
	<div class="row">
		<div class="panel panel-primary">
			<div class="panel-heading">
				<h1>Upload bank statements and credit card statements into Softloft</h1>
			</div>
		</div>
	</div>
	<div class="row help-body"><p class="lead">How to upload or manually input your bank statement into Softloft</p>
		<div class="help-steps">
			<div class="help-step">
				<h2>How do I get my bank statements?</h2>
				<ul>
					<li>You will need to get your bank statements from your internet banking.</li>
					<li>Simply log-on to your internet banking and download your statements for a particular period.
					</li>
					<li>Download you statement in a CSV or OFX format and save the file onto your computer.</li>
				</ul>
			</div>
			<div class="help-step">
				<h2>Step 1 - Upload your statements</h2>
				<img src="/img/help/low_upload-your-statements.png" data-src="/img/help/upload-your-statements.png" alt="Upload Your Statements"
					 title="Upload Your Statements"/>
				<div class="help-instructions">
					<ol>
						<li>Navigate to your bank dashboard by selecting &quot;Bank&quot; from the top menu and then
							click &quot;Dashboard&quot;. You should see your bank accounts that you have setup.
						</li>
						<li>There are 2 ways to upload your bank statements.
							<ul>
								<li>You can drag the file from your computer onto your bank account block, or</li>
								<li>You can click the &quot;Choose File&quot; button, locate the bank statement file
									on your computer and upload it.
								</li>
							</ul>
						</li>
					</ol>
					<p>You will then be taken to the bank statement upload screen.</p></div>
			</div>

			<div class="help-step">
				<h2>Step 2 - Finalize the upload into Softloft</h2>
				<img src="/img/help/low_finalize-the-upload-into-softloft.png" data-src="/img/help/finalize-the-upload-into-softloft.png"
					 alt="Finalize The Upload Into Softloft" title="Finalize The Upload Into Softloft"
				/>

				<div class="help-instructions">
					<ol>
						<li>You will now need to tell Softloft what to do with each column before you import the
							statement. In each column select whether the column relates to:
							<ul>
								<li>Date: this is the date of the transaction</li>
								<li>Description: this is the description of the transaction on the bank statement
								</li>
								<li>+/- Value: select this if the money going out and money coming in to your
									account are in the same column
								</li>
								<li>Money coming in: Select this for a column that displays money coming into your
									account
								</li>
								<li>Money going out: Select this for a column that displays money going out of your
									account
								</li>
								<li>Balance: select the balance column if the import displays your balance after
									each transaction
								</li>
							</ul>
						</li>
						<li>Exclude any rows from the import that you don't want to import by ticking the boxes in
							the left hand column (highlighted in yellow above), for example: I don't want the
							heading row to be imported as it does not relate to a transaction. Therefore I will tick
							the box in that row.
						</li>
						<li>The system will calculate what your closing balance will be after you import your bank
							statement. Please make sure that this agrees to your balance as per your bank statement.
							It is important for your bank balance on Softloft agrees to your bank statement as it
							will ensure that you have completeness of transactions.
							<ul>
								<li>There are a couple reasons why your bank balance on Softloft may not agree to
									your bank statement:
									<ul>
										<li><span style="text-decoration:underline">You may not have an opening bank balance</span>.
											Softloft will calculate your bank balance by taking your opening bank
											balance and then add or subtract your transactions to equal your closing
											bank balance. Therefore if you are importing bank statements onto
											Softloft that do not start with a zero balance then you will need to add
											an opening balance. This can be added if you import your trial balance,
											add a journal entry or manually add a transaction via the bank
											dashboard.
										</li>
										<li><span
												style="text-decoration:underline">You may have missed a statement.</span>
										</li>
									</ul>
								</li>
							</ul>
						</li>
						<li>If some of your cells are highlighted in red it means that the particular cell is not
							recognized. Ensure the your headings in point 1 are correct and you have excluded the
							rows in point 2. In this example &quot;Value&quot; was highlighted in red as the top
							header row of the import needed to be excluded.
						</li>
						<li>Finally click &quot;Save bank statement&quot;</li>
					</ol>
				</div>
			</div>

			<div class="help-step">
				<h2>Step 3 - Return to the bank dashboard</h2>
				<img src="/img/help/low_return-to-the-bank-dashboard.png" data-src="/img/help/return-to-the-bank-dashboard.png" alt="Return To The Bank Dashboard"
					 title="Return To The Bank Dashboard"/>

				<div class="help-instructions">
					<p>After you save your bank statement you will be directed
						back to the bank dashboard, where you can see that your estimated bank balance has been
						updated
						and there are transactions for you to reconcile.</p>

					<p>&nbsp;</p>
				</div>
			</div>
		</div>
	</div>
</div>


<div class="col-xs-12 help">
	<span class="anchor" id="reconciling_transactions_scroll"></span>
	<div class="row">
		<div class="panel panel-primary">
			<div class="panel-heading"><h1>Reconcile bank statement transactions on Softloft</h1></div>
		</div>
	</div>
	<div class="row help-body"><p class="lead">How to reconcile your bank statements on Softloft</p>
		<div class="help-steps">
			<div class="help-step"><h2>What is
					reconciling
					in Softloft</h2><img src="/img/help/low_what-is-reconciling-in-softloft.png" data-src="/img/help/what-is-reconciling-in-softloft.png"
										 alt="What Is Reconciling In Softloft" title="What Is Reconciling In Softloft"
				>
				<p>Bank reconciliation is a way to make sure that all of
					the
					transactions on your bank statement are in Softloft. When reconciling you statements in
					Softloft
					you
					will allocate the transactions on your bank statement to the different accounts,
					invoices
					and
					purchase orders in Softloft. This will assist you in tracking your incomes and expenses.
					Traditionally this was a manual process, but not anymore. Softloft's intelligent
					transaction
					matching will assist you.</p>
				<ol>
					<li>Begin reconciling by navigating to the bank dashboard and then clicking the "Reconcile"
						button.
					</li>
				</ol>
			</div>
			<div class="help-step"><h2>Elements of
					the
					reconcile screen</h2><img src="/img/help/low_elements-of-the-reconcile-screen.png" data-src="/img/help/elements-of-the-reconcile-screen.png"
											  alt="Elements Of The Reconcile Screen"
											  title="Elements Of The Reconcile Screen">
				<p>Each transaction on the reconciliation screen is
					surrounded by
					a block. The top portion of the block is the details from your transaction, being the
					date,
					description and amount of the transaction. The bottom portion of the block are the
					methods
					used
					to
					allocate the bank transactions to the different accounts, invoices and purchase orders.
					If
					the
					amount is red, it indicates money leaving your account and if the amount is green it
					indicates
					money
					coming into your account.</p>

				<p>Each method used to allocate transactions will be discussed below.</p>
				<ul>
					<li>Manual allocations</li>
					<li>Automatic allocations</li>
					<li>Rule allocations</li>
					<li>Split allocations</li>
					<li>Invoice allocations</li>
					<li>Payable allocations</li>
				</ul>
			</div>
			<div class="help-step"><h2>Manual
					allocations</h2><img src="/img/help/low_manual-allocations.png" data-src="/img/help/manual-allocations.png" alt="Manual Allocations"
										 title="Manual Allocations">
				<p>To manually allocate a transaction, ensure that manual
					is
					selected and highlighted in Blue</p>
				<ol>
					<li>Click the dropdown list and select an account from the default set of accounts
						<ul>
							<li>Alternatively click the list and start typing the account you are looking
								for
								and
								the system will filter the accounts based on your input.
							</li>
							<li>Click the account that you want to allocated the transaction to</li>
						</ul>
					</li>
					<li>You will notice that the transaction changes to green, then click the post button.
					</li>
				</ol>
				<p>This transaction has now been posted to the general ledger and has been removed from your
					reconcile screen.</p></div>
			<div class="help-step"><h2>Automatic
					allocations</h2><img src="/img/help/low_automatic-allocations.png" data-src="/img/help/automatic-allocations.png" alt="Automatic Allocations"
										 title="Automatic Allocations">
				<p>Softloft will learn where you have allocated
					transactions
					in
					the past based on the description of the transaction</p>
				<ul>
					<li>I have allocated this transactions description in the past to bank fees.</li>
					<li>Therefore the system finds the most suitable account to allocate this transaction
						too.
					</li>
					<li>You will notice that the automatic box is highlighted and the transaction has gone
						green.
					</li>
					<li>If you don’t want the systems automatic selection then you can click manual and
						select
						another account.
					</li>
				</ul>
				<p>&nbsp;</p></div>
			<div class="help-step"><h2>Rule
					allocations</h2><img src="/img/help/low_rule-allocations.png" data-src="/img/help/rule-allocations.png" alt="Rule Allocations"
										 title="Rule Allocations">
				<p>You can add rules to allocate transactions based on
					criteria
					that you setup in the system. Setting up rules largely decreases the time taken to
					allocate
					your
					accounts.</p>
				<ol>
					<li>To do this, click rules</li>
					<li> Click the create rule button</li>
				</ol>
				<p>A create rule screen will pop up</p></div>
			<div class="help-step"><h2>Split
					transaction
					allocations</h2><img src="/img/help/low_split-transaction-allocations.png" data-src="/img/help/split-transaction-allocations.png"
										 alt="Split Transaction Allocations" title="Split Transaction Allocations"
				>
				<p>You may need to split a transaction. For example, you
					may
					draw
					money to pay for general expenses, salaries and entertainment. In this example we drew
					500.</p>
				<ol>
					<li>To split the transaction click "Split" and then "Split transaction".
					</li>
				</ol>
			</div>
			<div class="help-step"><h2>Invoice
					allocations</h2><img src="/img/help/low_invoice-allocations.png" data-src="/img/help/invoice-allocations.png" alt="Invoice Allocations"
										 title="Invoice Allocations">
				<p>One of the ways to allocate money received to an
					invoice
					is
					through the bank reconciliation screen. Money received can also be allocated against
					invoices
					from
					the Sales dashboard.</p>
				<ol>
					<li>In this example I have received money from a customer called "Client 2".
						The
						customer has now paid me so I will need to allocate the money received to the
						invoice to
						show the invoice as paid.
					</li>
					<li>Click the invoice tab.</li>
					<li>Click the dropdown list and select "Client 2" (if the system has not
						chosen it
						already for you).
					</li>
					<li>You will then see a list of outstanding invoices that relate to that customer.</li>
					<li>The system will give you a percentage match of how close the details and amount
						received
						are
						to the invoice and rank the highest matches first to assist you in allocating. You
						can
						also
						click view to preview the invoice again.
					</li>
					<li>Click pay on the invoice that you want to allocate the payment too. You will then
						see an
						"Add payment" pop-up.
					</li>
					<li>The "Payment type" shows you that the payment is coming from the bank
						statement.
					</li>
					<li>This section shows you the transactions on the bank statement that you want to apply
						to
						the
						invoice. If you can't find you payment in this section then click the "Show All"
						tickbox (as highlighted in yellow) and locate the payment.
					</li>
					<li>The box that is ticked on the bank transaction listing shows you which bank
						transaction
						we
						are going to apply against the invoice.
					</li>
					<li>Click "Add Payment" to allocate the amount against the invoice.</li>
					<li>The amount received has now been allocated to the invoice, removed from my
						reconciliation
						screen and marked as paid.
					</li>
				</ol>
			</div>
			<div class="help-step"><h2>Purchase /
					My
					bills
					allocations</h2><img src="/img/help/low_purchase-my-bills-allocations.png" data-src="/img/help/purchase-my-bills-allocations.png"
										 alt="Purchase My Bills Allocations" title="Purchase My Bills Allocations"
				>
				<p><span style="text-decoration:underline">PLEASE NOTE: Invoice and purchase/payable allocations and creations are the done in the same manner in Softloft</span>
				</p>

				<p>One of the ways to allocate money paid to a purchase order is through the bank
					reconciliation
					screen. Money paid can also be allocated against purchase orders / My bills from the
					Purchases
					dashboard.</p>
				<ol>
					<li>In this example I have paid money from a supplier called "Sam". I have
						paid
						the
						supplier so I will need to allocate the money paid to the purchase order to show the
						purchase order as paid.
					</li>
					<li>Click the Payable tab.</li>
					<li>Click the dropdown list and select "Sam" (if the system has not chosen it
						already
						for you).
					</li>
					<li>You will then see a list of outstanding purchase orders that relate to that
						customer.
					</li>
					<li>The system will give you a percentage match of how close the details and amount paid
						are
						to
						the purchase order and rank the highest matches first to assist you in allocating.
						You
						can
						also click view to preview the purchase order again.
					</li>
					<li>Click pay on the purchase order that you want to allocate the payment too. You will
						then
						see
						an "Add payment" pop-up.
					</li>
					<li>The "Payment type" shows you that the payment is coming from the bank
						statement.
					</li>
					<li>This section shows you the transactions on the bank statement that you want to apply
						to
						the
						purchase order. If you can't find you payment in this section then click the "Show
						All"
						tickbox (as highlighted in yellow) and locate the payment.
					</li>
					<li>The box that is ticked on the bank transaction listing shows you which bank
						transaction
						we
						are going to apply against the purchase order.
					</li>
					<li>Click "Add Payment" to allocate the amount against the purchase order.
					</li>
					<li>The amount paid has now been allocated to the purchase order, removed from my
						reconciliation
						screen and marked as paid.
					</li>
				</ol>
			</div>
		</div>
	</div>
</div>
