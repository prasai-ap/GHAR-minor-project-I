<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    <link rel="stylesheet" href="contact.css">
    <link rel="website icon" type="png" href="/GHAR_1/gharimg/ghar.png" />
</head>
<body>
    <div class="background">
        <div class="background1">
            <div class="langauge-selection">
                <span class="language">Language<br></span>
                <div class="select-langauge">
                    <select class="english-select">
                        <option  value="" decabled selected>English(US)</option>
                        <option>English</option>
                        <option>Nepali</option>
                    </select>
                </div>
            </div>
            <div class="paragraph">
                <p>In order to provide the best service, please include the email associated with your GHAR account.<br>

                  We strive to respond to all inquiries within 1-3 business days.</p>
            </div>
                <section>
                    <div class="box-container">
                        <div class="container1">
                            <span class="submit-a-request"><p>Submit a request</p></span>
                            <div class="Radio-container">
                            <span class="City">*City</span>
                            <div class="radio-box1">
                                <select class="Radio-city">
                                    <option>Kathmandu</option>
                                    <!-- <option></option> -->
                                    <option>Bhaktapur</option>
                                    <!-- <option></option> -->
                                    <option>Lalitpur</option>
                                </select>
                            </div>
                            <div class="place-container">
                            <span class="place">*Place</span>
                            <div class="radio-box2">
                                <select class="Radio-Place">
                                    <option>Gothatar</option>
                                    <option>Balkot</option>
                                    <option>Mulpani</option>
                                    <option>Ratnapark</option>
                                    <option>Pimbhal</option>
                                </select>
                            </div>
                        </div>
                        <div class="input-comment">
                            <input class="comment" placeholder="Share Us about your problem" name="comment">
                        </div>
                        <div class="button-div">
                            <button class="button" type="button" id="btn"> Submit</button>
                        </div>
                     </div>
                </div>
                        <div class="container2">
                            <div class="Answer-fast">
                                <p>Need Answers Fast?</p>
                                <span class="Article">Check out these articles?</span>
                            </div>
                            <div class="paragraph-1">
                                <li><a href="#" onclick="showInfo('cancel')">How can I cancel my order?</a></li>
                            </div>
                            <div class="paragraph-2">
                                <li><a href="#" onclick="showInfo('return')">How can I initiate a return?</a></li>
                            </div>
                            <div class="paragraph-3">
                                <li><a href="#" onclick="showInfo('tracking')">Where can I find my tracking information?</a></li>
                            </div>
                            <div class="paragraph-4">
                                <li><a href="#" onclick="showInfo('damaged')">What if my item arrived damaged or defective?</a></li>
                            </div>
                            <div class="paragraph-5">
                                <li><a href="#" onclick="showInfo('return-policy')">What is GHAR's return policy?</a></li>
                            </div>
                        </div>
                    </div>
                    <div id="info-box" class="info-box">
                        <span class="close-btn" onclick="closeInfo()">×</span>
                        <div id="info-content"></div>
                    </div>
                </section>
        </div>
    </div>

<script>
    function showInfo(infoType) {
        var infoBox = document.getElementById('info-box');
        var infoContent = document.getElementById('info-content');

        var infoData = {
            'cancel': 'You may cancel an order within 30 minutes after placing it by visiting the Your Orders page and selecting the Cancel Order button for the order. The option to cancel will only appear for 30 minutes after you place an order. After that point, the order will be processed for delivery to you.<br>Although we cannot guarantee that your order can be canceled after 30 minutes, we will do our best to assist you.<br>Depending on the order type and its status, there may be a Request Cancel Order option (note that not all orders have this button). If available, use this button to request a cancellation.',
            'return': 'To initiate a return on our web application GHAR, you can begin the process within 7 days of receiving your order. Start by visiting the "Your Orders" section on the GHAR website, where you will find a list of all your past orders. Locate the specific order you wish to return and look for the "Initiate Return" button next to its details. Click on this button to proceed with the return process. Follow the on-screen instructions to select the reason for your return and provide any necessary details. Once you have completed these steps, submit your return request. Please note that returns must be initiated within the 7-day timeframe from receiving your order, and not all orders may be eligible for returns due to certain product or category restrictions. Our customer support team is available to assist you if you have any questions or encounter difficulties during the return process.',
            'tracking': 'To find your tracking information on our web application GHAR, simply log into your account and navigate to the "Your Orders" section. There, you will find a list of all your previous orders. Select the specific order you want to track and click into its details. If you encounter any issues or need further assistance, our customer support team is available to help you promptly resolve any concerns regarding your order and its tracking information.',
            'damaged': 'If your item arrived damaged or defective when you received it from GHAR, we apologize for any inconvenience caused. We strive to ensure that all products are delivered in perfect condition, but in the rare event that you receive a damaged or defective item, we are here to help resolve the issue promptly. Please contact our customer support team immediately upon receiving the damaged or defective item. Provide details such as your order number, a description or photos of the damage or defect, and any other relevant information. Our team will assess the situation and guide you through the return or exchange process. Depending on the specific circumstances and product availability, we may offer a replacement, repair, exchange for a similar item, or a refund. We value your satisfaction and aim to address any concerns regarding damaged or defective items swiftly to ensure your experience with GHAR is positive and hassle-free.',
            'return-policy':'GHARs return policy ensures that customers have a straightforward process for returning items if needed. Generally, you can initiate a return within 7 days of receiving your order. The item must be unused, in its original packaging, and in the same condition as when you received it. To start a return, visit the "Your Orders" section on the GHAR website, select the order you wish to return, and follow the prompts to initiate the return process. Depending on the nature of the product and the specific circumstances, GHAR may offer a refund, replacement, or exchange. Its important to note that certain items may have different return policies or may not be eligible for return, such as personalized or customized items unless they are defective. For detailed information on GHARs return policy, including any exceptions or specific conditions, its recommended to review the policy on their website or contact their customer support for assistance.'
        };

        infoContent.innerHTML = infoData[infoType];
        infoBox.style.display = 'block';
    }

    function closeInfo() {
        var infoBox = document.getElementById('info-box');
        infoBox.style.display = 'none';
    }
</script>

</body>
</html>