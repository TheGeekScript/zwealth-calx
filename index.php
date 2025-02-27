<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>ZWealth - Calculators</title>
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    h1, h2, h3, h4, h5, h6, p, .form-label {color: #585858 !important;text-align: center;}
  .nav-pills .nav-link.active, .nav-pills .show>.nav-link {background-color: #7ed957;color: #fff;}
  .nav-pills .nav-link.active#fill-home-tab, .nav-pills .nav-link.active#fill-profile-tab, .nav-pills .nav-link.active#fill-contact-tab{background-color: #4aa523;}
  .nav-link{border-bottom: 1px solid #7ed957;font-size: 18px;font-weight: 700;letter-spacing: 1.1px;color: #585858;text-transform: uppercase;}
  .nav-pills .nav-link{border-radius:0}
  .nav-link:focus, .nav-link:hover{color: #000;}
  .btn-primary, .btn-primary:hover{background-color: #7ed957;border: 0;border-radius: 0;}
  .result{box-shadow: 0 0 5px #ccc;
    margin-top: 10px;
    padding: 10px;
    min-height: 280px;
    position: relative;}
  </style>
</head>
<body>

  <div class="container mt-5">

    <ul class="nav nav-pills nav-fill" id="myTab" role="tablist">
      <li class="nav-item" role="presentation">
        <button class="nav-link active" id="fill-home-tab" data-bs-toggle="tab" data-bs-target="#fill-home" type="button" role="tab" aria-controls="fill-home" aria-selected="true">
        <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="currentColor" class="bi bi-piggy-bank-fill" viewBox="0 0 16 16"><path d="M7.964 1.527c-2.977 0-5.571 1.704-6.32 4.125h-.55A1 1 0 0 0 .11 6.824l.254 1.46a1.5 1.5 0 0 0 1.478 1.243h.263c.3.513.688.978 1.145 1.382l-.729 2.477a.5.5 0 0 0 .48.641h2a.5.5 0 0 0 .471-.332l.482-1.351c.635.173 1.31.267 2.011.267.707 0 1.388-.095 2.028-.272l.543 1.372a.5.5 0 0 0 .465.316h2a.5.5 0 0 0 .478-.645l-.761-2.506C13.81 9.895 14.5 8.559 14.5 7.069q0-.218-.02-.431c.261-.11.508-.266.705-.444.315.306.815.306.815-.417 0 .223-.5.223-.461-.026a1 1 0 0 0 .09-.255.7.7 0 0 0-.202-.645.58.58 0 0 0-.707-.098.74.74 0 0 0-.375.562c-.024.243.082.48.32.654a2 2 0 0 1-.259.153c-.534-2.664-3.284-4.595-6.442-4.595m7.173 3.876a.6.6 0 0 1-.098.21l-.044-.025c-.146-.09-.157-.175-.152-.223a.24.24 0 0 1 .117-.173c.049-.027.08-.021.113.012a.2.2 0 0 1 .064.199m-8.999-.65a.5.5 0 1 1-.276-.96A7.6 7.6 0 0 1 7.964 3.5c.763 0 1.497.11 2.18.315a.5.5 0 1 1-.287.958A6.6 6.6 0 0 0 7.964 4.5c-.64 0-1.255.09-1.826.254ZM5 6.25a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0"/></svg>
          LIFE GOAL CALCULATORS</button>
      </li>
      <li class="nav-item" role="presentation">
        <button class="nav-link" id="fill-profile-tab" data-bs-toggle="tab" data-bs-target="#fill-profile" type="button" role="tab" aria-controls="fill-profile" aria-selected="false">
          <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="currentColor" class="bi bi-wallet2" viewBox="0 0 16 16"><path d="M12.136.326A1.5 1.5 0 0 1 14 1.78V3h.5A1.5 1.5 0 0 1 16 4.5v9a1.5 1.5 0 0 1-1.5 1.5h-13A1.5 1.5 0 0 1 0 13.5v-9a1.5 1.5 0 0 1 1.432-1.499zM5.562 3H13V1.78a.5.5 0 0 0-.621-.484zM1.5 4a.5.5 0 0 0-.5.5v9a.5.5 0 0 0 .5.5h13a.5.5 0 0 0 .5-.5v-9a.5.5 0 0 0-.5-.5z"/></svg>
          FINANCIAL CALCULATORS</button>
      </li>
    </ul>
    
    <div class="tab-content mt-3" id="fillTabContent">
      <div class="tab-pane fade show active" id="fill-home" role="tabpanel" aria-labelledby="fill-home-tab">
        <h5>Life Goal Calculators</h5>
        <p>This is the content of the Life Goal Calculators.</p>

        <ul class="nav nav-pills nav-fill" id="nestedTab" role="tablist">
          <li class="nav-item" role="presentation">
            <button class="nav-link active" id="nested-tab1" data-bs-toggle="tab" data-bs-target="#nested-content1" type="button" role="tab" aria-controls="nested-content1" aria-selected="true">Retirement Calculator</button>
          </li>
          <li class="nav-item" role="presentation">
            <button class="nav-link" id="nested-tab2" data-bs-toggle="tab" data-bs-target="#nested-content2" type="button" role="tab" aria-controls="nested-content2" aria-selected="false">Other Goal Calculator</button>
          </li>
        </ul>
        
        <div class="tab-content mt-3" id="nestedTabContent">
          <div class="tab-pane fade show active" id="nested-content1" role="tabpanel" aria-labelledby="nested-tab1">
            <p class="col-md-10 mx-auto">Retiring comfortably is not an impossibility if you know how to invest and save wisely. To know how much return of investments you will be able to gain, you need the services of a retirement calculator. Remember that planning for the future is a mixture of both fiscal and investment prudence.</p>
          </div>
          <div class="tab-pane fade" id="nested-content2" role="tabpanel" aria-labelledby="nested-tab2">
            <h5>Other Goal Calculator</h5>
            <p>This is the content of Other Goal Calculator.</p>
          </div>
        </div>
      </div>
      
      <div class="tab-pane fade" id="fill-profile" role="tabpanel" aria-labelledby="fill-profile-tab">
        <p>Investing in mutual funds is like planning a road trip. And if you don't have a plan before beginning a journey, it could delay reaching your destination. Hence, we are here to help you with a few calculators to help you plan your investing journey.</p>
        
        <ul class="nav nav-pills nav-fill" id="nestedTab" role="tablist">
          <li class="nav-item" role="presentation">
            <button class="nav-link active" id="nested-tab4" data-bs-toggle="tab" data-bs-target="#nested-content4" type="button" role="tab" aria-controls="nested-content4" aria-selected="true">SIP Growth Calculator</button>
          </li>
          <li class="nav-item" role="presentation">
            <button class="nav-link" id="nested-tab5" data-bs-toggle="tab" data-bs-target="#nested-content5" type="button" role="tab" aria-controls="nested-content5" aria-selected="false">SIP Needs Calculator</button>
          </li>
          <li class="nav-item" role="presentation">
            <button class="nav-link" id="nested-tab6" data-bs-toggle="tab" data-bs-target="#nested-content6" type="button" role="tab" aria-controls="nested-content6" aria-selected="false">SWP Calculator</button>
          </li>
          <li class="nav-item" role="presentation">
            <button class="nav-link" id="nested-tab7" data-bs-toggle="tab" data-bs-target="#nested-content7" type="button" role="tab" aria-controls="nested-content7" aria-selected="true">EMI Calculator</button>
          </li>
        </ul>
        
        <div class="tab-content mt-3" id="nestedTabContent">
          <div class="tab-pane fade show active" id="nested-content4" role="tabpanel" aria-labelledby="nested-tab4">
            <h5>SIP Growth Calculator</h5>
            <p>The SIP calculator helps estimate the potential growth of your Systematic Investment Plan (SIP) investment over your chosen time frame. SIP is a convenient method to save for your long-term financial goals.</p>

            <div class="row">
              <div class="col-md-6">
                  <form id="sipForm">
                      <div class="mb-3">
                          <label for="sip_monthlyInvestment" class="form-label">Monthly Investment Amount</label>
                          <input type="number" class="form-control" id="sip_monthlyInvestment" required value="10000">
                      </div>
                      <div class="mb-3">
                          <label for="sip_investmentPeriod" class="form-label">Period (Years)</label>
                          <input type="number" class="form-control" id="sip_investmentPeriod" required value="10">
                      </div>
                      <div class="mb-3">
                          <label for="sip_expectedReturns" class="form-label">Expected Returns (%)</label>
                          <input type="number" class="form-control" id="sip_expectedReturns" required value="12">
                      </div>
                      <div class="mb-3">
                
                          <label for="sip_growthType" class="form-label">Expected Growth in Savings</label>
                          <div class="row">
                            <div class="col">
                              <input type="text" class="form-control" name="expected_growth_in_saving_amt" id="expected_growth_in_saving_amt" value="0">
                            </div>
                            <div class="col">
                          <select class="form-control" id="sip_growthType" required>
                              <option value="yearly_percent">% per Year</option>
                              <option value="half_yearly_rs">Half Yearly (Rs.)</option>
                              <option value="yearly_rs">Yearly (Rs.)</option>
                          </select>
                            </div>
                          </div>

                      </div>
                      <button type="submit" class="btn btn-primary">Calculate SIP</button>
                  </form>
              </div>
              <div class="col-md-6">
                  <div class="result" id="result">
                      <h5>Calculation Results:</h5>
                      <p id="sip_totalInvested">Total Amount Invested: ₹0</p>
                      <p id="sip_futureValue">Estimated Future Value: ₹0</p>
                      <p id="sip_growthMultiple">Growth Multiple: 0 times</p>
                      <form id="emailForm" method="POST" action="send_email.php">
                          <div class="mb-3">
                              <label for="email" class="form-label">Enter your Email</label>
                              <input type="email" class="form-control" id="email" name="email" required>
                          </div>
                          <input type="hidden" id="emailData" name="emailData">
                          <button type="submit" class="btn btn-primary">Send Results via Email</button>
                      </form>
                  </div>
              </div>
            </div>

          </div>
          <div class="tab-pane fade" id="nested-content5" role="tabpanel" aria-labelledby="nested-tab5">
            <h5>SIP Needs Calculator</h5>
            <p>The SIP calculator helps estimate the potential growth of your Systematic Investment Plan (SIP) investment over your chosen time frame. SIP is a convenient method to save for your long-term financial goals.</p>
          </div>
          <div class="tab-pane fade" id="nested-content6" role="tabpanel" aria-labelledby="nested-tab6">
            <p class="col-md-10 mx-auto">An SWP (Systematic Withdrawal Plan) calculator is used to calculate the amount that you will earn from your investment in an SWP or Systematic Withdrawal Plan. The SWP calculator is thus a useful tool that will help you to easily choose the right SWP scheme for yourself, based on the returns that you will get from the scheme.</p>

            <div class="row">
              <div class="col-lg-1 col-xs-12">&nbsp;</div>
                <div class="col-md-5">
                    <form id="swpForm">
                        <div class="mb-3">
                            <label for="swp_totalInvestment" class="form-label">Total Investment</label>
                            <input type="number" class="form-control" id="swp_totalInvestment" required value="500000">
                        </div>
                        <div class="mb-3">
                            <label for="swp_monthlyWithdrawal" class="form-label">Monthly Withdrawal</label>
                            <input type="number" class="form-control" id="swp_monthlyWithdrawal" required value="10000">
                        </div>
                        <div class="mb-3">
                            <label for="swp_expectedReturns" class="form-label">Expected Returns (%)</label>
                            <input type="number" class="form-control" id="swp_expectedReturns" required value="8">
                        </div>
                        <div class="mb-3">
                            <label for="swp_duration" class="form-label">Duration (Years)</label>
                            <input type="number" class="form-control" id="swp_duration" required value="5">
                        </div>
                        <button type="submit" class="btn btn-primary">Calculate SWP</button>
                    </form>
                </div>
                <div class="col-md-5">
                    <div class="result" id="result">
                      <h5><svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="currentColor" class="bi bi-calculator" viewBox="0 0 16 16">  <path d="M12 1a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1zM4 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2z"/><path d="M4 2.5a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-.5.5h-7a.5.5 0 0 1-.5-.5zm0 4a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5zm0 3a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5zm0 3a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5zm3-6a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5zm0 3a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5zm0 3a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5zm3-6a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5zm0 3a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v4a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5z"/></svg> SWP CALCULATOR</h5><hr>

                      <p>Invested Amount</p>
                      <h2 id="swp_investedAmount">₹5,00,000</h2><hr>
                      <p>Total Withdrawal</p>
                      <h2 id="swp_totalWithdrawal">₹6,00,000</h2><hr>
                      <p>Final Value</p>
                      <h2 id="swp_finalValue">₹10,154</h2><hr>

                        <form id="emailForm" method="POST" action="send_email.php">
                          <div class="input-group mb-3">
                            <input type="text" class="form-control" placeholder="Email ID" aria-label="Email ID" aria-describedby="button-addon2" id="email" name="email" required>
                            <input type="hidden" id="emailData" name="emailData">
                            <input type="hidden" id="calcEmailType" name="calcEmailType" value="emiHomeLoan">
                            <button class="btn btn-outline-secondary" type="submit" id="button-addon2">Send to email</button>
                          </div>
                        </form>
                    </div>
                </div>
                <div class="col-lg-1 col-xs-12">&nbsp;</div>
            </div>

          </div>
          <div class="tab-pane fade" id="nested-content7" role="tabpanel" aria-labelledby="nested-tab7">
                <p class="col-md-10 mx-auto">Understanding your monthly loan payments is crucial for effective financial management, especially when budgeting for goals like home renovations or debt reduction. Using an EMI calculator simplifies this process. It can help you quickly estimate your payments by entering the loan amount, term, and interest rate, giving you an instant view of your monthly instalments.</p>

                <div class="row pt-3">
                  <div class="col-lg-1 col-xs-12">&nbsp;</div>
                    <div class="col-md-5">
                        <form id="emiForm">
                            <div class="mb-3">
                                <label for="loanAmount" class="form-label">Loan Amount (Principal)</label>
                                <input type="number" class="form-control" id="loanAmount" value="1000000" required>
                            </div>
                            <div class="mb-3">
                                <label for="interestRate" class="form-label">Rate of Interest (Annual %)</label>
                                <input type="number" class="form-control" id="interestRate" value="8" required>
                            </div>
                            <div class="mb-3">
                                <label for="loanTenure" class="form-label">Loan Tenure (Years)</label>
                                <input type="number" class="form-control" id="loanTenure" value="10" required>
                            </div>
                            <button type="submit" class="btn btn-primary">Calculate EMI</button>
                        </form>
                    </div>
                    <div class="col-md-5">
                        <div class="result" id="result">
                            <h5><svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="currentColor" class="bi bi-calculator" viewBox="0 0 16 16">  <path d="M12 1a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1zM4 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2z"/><path d="M4 2.5a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-.5.5h-7a.5.5 0 0 1-.5-.5zm0 4a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5zm0 3a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5zm0 3a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5zm3-6a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5zm0 3a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5zm0 3a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5zm3-6a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5zm0 3a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v4a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5z"/></svg> EMI CALCULATOR</h5><hr>

                            <h5>MONTHLY EMI</h5>
                            <h2 id="monthlyEMI">₹12,133</h2><hr>
                            <table class="table table-responsive">
                              <tbody>
                                <tr>
                                  <td>Principal Amount</td>
                                  <td><p id="principalAmount" style="text-align: right;">₹10,00,000</p></td>
                                </tr>
                                <tr>
                                  <td>Interest Amount</td>
                                  <td><p id="interestAmount" style="text-align: right;">₹4,55,931</p></td>
                                </tr>
                                <tr>
                                <td>Total Payable</td>
                                  <td><p id="totalPayable" style="text-align: right;">₹14,55,931</p></td>
                                </tr>
                              </tbody>
                            </table>

                            <form id="emailForm" method="POST" action="send_email.php">
                              <div class="input-group mb-3">
                                <input type="text" class="form-control" placeholder="Email ID" aria-label="Email ID" aria-describedby="button-addon2" id="email" name="email" required>
                                <input type="hidden" id="emailData" name="emailData">
                                <input type="hidden" id="calcEmailType" name="calcEmailType" value="emiHomeLoan">
                                <button class="btn btn-outline-secondary" type="submit" id="button-addon2">Send to email</button>
                              </div>

                                <!-- <div class="mb-3">
                                    <label for="email" class="form-label">Enter your Email</label>
                                    <input type="email" class="form-control" id="email" name="email" required>
                                </div>
                                <input type="hidden" id="emailData" name="emailData">
                                <input type="hidden" id="calcEmailType" name="calcEmailType" value="emiHomeLoan">
                                <button type="submit" class="btn btn-primary">Send Results via Email</button> -->
                            </form>
                        </div>
                    </div>
                    <div class="col-lg-1 col-xs-12">&nbsp;</div>
                </div>

            </div>

        </div>

      </div>

    </div>
    Messages: <div id="message" class="mt-3 pt-3"></div>
  </div>

  <script>
    // Home Loan EMI Calculator
    document.getElementById('emiForm').addEventListener('submit', function (event) {
      event.preventDefault();

      // Get input values
      const loanAmount = parseFloat(document.getElementById('loanAmount').value);
      const annualInterestRate = parseFloat(document.getElementById('interestRate').value);
      const loanTenureYears = parseFloat(document.getElementById('loanTenure').value); // Tenure in years

      // Convert tenure from years to months
      const loanTenureMonths = loanTenureYears * 12;

      // Calculate monthly interest rate
      const monthlyInterestRate = (annualInterestRate / 100) / 12;

      // Calculate EMI using the formula
      const emi = (loanAmount * monthlyInterestRate * Math.pow(1 + monthlyInterestRate, loanTenureMonths)) / (Math.pow(1 + monthlyInterestRate, loanTenureMonths) - 1);

      // Calculate total payable and interest
      const totalPayable = emi * loanTenureMonths;
      const interestAmount = totalPayable - loanAmount;
      
      // Format numbers with commas for better readability
      const formatNumber = (num) => num.toLocaleString('en-IN', { maximumFractionDigits: 0 });

      // Display results without decimal values
      document.getElementById('monthlyEMI').innerText = `₹${formatNumber(emi)}`;
      document.getElementById('principalAmount').innerText = `₹${formatNumber(loanAmount)}`;
      document.getElementById('interestAmount').innerText = `₹${formatNumber(interestAmount)}`;
      document.getElementById('totalPayable').innerText = `₹${formatNumber(totalPayable)}`;

      // Prepare email data
      const emailData = `
        Principal Amount: ₹${formatNumber(loanAmount)}
        Rate of Interest: ${formatNumber(annualInterestRate)}
        Loan Tenure: ${formatNumber(loanTenureYears)}
        Monthly EMI: ₹${formatNumber(emi)}
        Interest Amount: ₹${formatNumber(interestAmount)}
        Total Payable: ₹${formatNumber(totalPayable)}
      `;
      document.getElementById('emailData').value = emailData.trim();
    });

    // Handle Home Loan EMI Calculator email form submission
    document.getElementById('emailForm').addEventListener('submit', async function (event) {
      event.preventDefault();

      // Get email and form data
      const email = document.getElementById('email').value;
      const emailData = document.getElementById('emailData').value;
      const calcEmailType = document.getElementById('calcEmailType').value;

      // Send data to the backend
      try {
          const response = await fetch('send_email.php', {
              method: 'POST',
              headers: {
                  'Content-Type': 'application/x-www-form-urlencoded',
              },
              body: `email=${encodeURIComponent(email)}&emailData=${encodeURIComponent(emailData)}&calcEmailType=${encodeURIComponent(calcEmailType)}`,
          });

          const result = await response.text();
          document.getElementById('message').innerHTML = result; // Display success/error message
      } catch (error) {
          console.error('Error:', error);
          document.getElementById('message').innerHTML = '<div class="alert alert-danger">An error occurred. Please try again.</div>';
      }
    });

    // SIP Calculator
    document.getElementById('sipForm').addEventListener('submit', function(event) {
    event.preventDefault();

    // Get input values
    const monthlyInvestment = parseFloat(document.getElementById('sip_monthlyInvestment').value);
    const investmentPeriod = parseInt(document.getElementById('sip_investmentPeriod').value);
    const expectedReturns = parseFloat(document.getElementById('sip_expectedReturns').value) / 100; // Convert percentage to decimal
    const growthType = document.getElementById('sip_growthType').value;
    const growthAmount = parseFloat(document.getElementById('expected_growth_in_saving_amt').value);

    // Calculate total amount invested
    const totalInvested = monthlyInvestment * investmentPeriod * 12;

    // Calculate future value based on growth type
    let futureValue;
    if (growthType === 'yearly_percent') {
        // Growth is a percentage per year
        const yearlyRate = expectedReturns + (growthAmount / 100); // Add growth percentage to expected returns
        const monthlyRate = yearlyRate / 12; // Monthly interest rate
        const totalPayments = investmentPeriod * 12; // Total number of payments
        futureValue = monthlyInvestment * (((Math.pow(1 + monthlyRate, totalPayments) - 1) / monthlyRate) * (1 + monthlyRate));
    } else if (growthType === 'half_yearly_rs') {
        // Growth is a fixed amount added half-yearly
        const halfYearlyGrowth = growthAmount;
        const totalHalfYears = investmentPeriod * 2;
        let totalFutureValue = 0;
        for (let i = 1; i <= totalHalfYears; i++) {
            totalFutureValue += monthlyInvestment * 6 * Math.pow(1 + expectedReturns / 2, i);
            totalFutureValue += halfYearlyGrowth * Math.pow(1 + expectedReturns / 2, i);
        }
        futureValue = totalFutureValue;
    } else if (growthType === 'yearly_rs') {
        // Growth is a fixed amount added yearly
        const yearlyGrowth = growthAmount;
        const totalYears = investmentPeriod;
        let totalFutureValue = 0;
        for (let i = 1; i <= totalYears; i++) {
            totalFutureValue += monthlyInvestment * 12 * Math.pow(1 + expectedReturns, i);
            totalFutureValue += yearlyGrowth * Math.pow(1 + expectedReturns, i);
        }
        futureValue = totalFutureValue;
    }

    // Calculate growth multiple
    const growthMultiple = futureValue / totalInvested;

    // Format numbers with commas for better readability
    const formatNumber = (num) => num.toLocaleString('en-IN', { maximumFractionDigits: 0 });

    // Display results
    document.getElementById('sip_totalInvested').innerText = `Total Amount Invested: ₹${formatNumber(totalInvested)}`;
    document.getElementById('sip_futureValue').innerText = `Estimated Future Value: ₹${formatNumber(futureValue.toFixed(0))}`;
    document.getElementById('sip_growthMultiple').innerText = `Growth Multiple: ${growthMultiple.toFixed(2)} times`;

    // Prepare email data
    const emailData = `Total Amount Invested: ₹${formatNumber(totalInvested)}\nEstimated Future Value: ₹${formatNumber(futureValue.toFixed(0))}\nGrowth Multiple: ${growthMultiple.toFixed(2)} times`;
    document.getElementById('emailData').value = emailData;
});

    // SWP Calculator
    document.getElementById('swpForm').addEventListener('submit', function(event) {
      event.preventDefault();

      // Get input values
      const totalInvestment = parseFloat(document.getElementById('swp_totalInvestment').value);
      const monthlyWithdrawal = parseFloat(document.getElementById('swp_monthlyWithdrawal').value);
      const expectedReturns = parseFloat(document.getElementById('swp_expectedReturns').value) / 100; // Convert percentage to decimal
      const duration = parseInt(document.getElementById('swp_duration').value);

      // Calculate invested amount
      const investedAmount = totalInvestment;

      // Calculate total withdrawal
      const totalWithdrawal = monthlyWithdrawal * duration * 12;

      // Calculate final value using the SWP formula (withdrawals at the end of the period)
      const monthlyRate = expectedReturns / 12;
      const numberOfMonths = duration * 12;

      // Future value of the initial investment
      const futureValueOfInvestment = investedAmount * Math.pow(1 + monthlyRate, numberOfMonths);

      // Future value of the withdrawals (annuity)
      const futureValueOfWithdrawals = monthlyWithdrawal * (Math.pow(1 + monthlyRate, numberOfMonths) - 1) / monthlyRate;

      // Final value = Future value of investment - Future value of withdrawals
      let finalValue = futureValueOfInvestment - futureValueOfWithdrawals;

      // Ensure final value does not go negative
      if (finalValue < 0) {
          finalValue = 0;
      }

      // Format numbers with commas for better readability
      const formatNumber = (num) => num.toLocaleString('en-IN', { maximumFractionDigits: 0 });

      // Display results
      document.getElementById('swp_investedAmount').innerText = `₹${formatNumber(investedAmount)}`;
      document.getElementById('swp_totalWithdrawal').innerText = `₹${formatNumber(totalWithdrawal)}`;
      document.getElementById('swp_finalValue').innerText = `₹${formatNumber(finalValue)}`;

      // Prepare email data
      const emailData = `Invested Amount: ₹${formatNumber(investedAmount)}\nTotal Withdrawal: ₹${formatNumber(totalWithdrawal)}\nFinal Value: ₹${formatNumber(finalValue)}`;
      document.getElementById('emailData').value = emailData;
  });
</script>
  <!-- Bootstrap JS (with Popper) -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>