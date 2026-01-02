function askQuestion(question) {
    var chatBox = document.getElementById('chat-box');
    var message = document.createElement('div');
    message.classList.add('chat-content');
    message.innerHTML = '<div class="user-message">' + question + '</div>' +
                        '<div class="bot-message">' + getResponse(question) + '</div>';
    chatBox.appendChild(message);
    chatBox.scrollTop = chatBox.scrollHeight;
}

function getResponse(question) {
    switch(question) {
        case 'How can i donate Blood?':
            return '1.Login to your account<br>2.Click on the Donate Blood button at the top-right of screen<br>3.check all the details and click next.If details are not correct,go to your profile and edit profile.<br>4.On the next page fill your previous medical history and click submit.<br>5.When admin approves your blood request,you can go to blood bank for donation.';
        case 'Is there any side effects of Blood donation?':
            return 'Yes, there can be some side effects of blood donation, though they are generally mild and temporary. These may include:<br>1.Dizziness or Lightheadedness.<br>2.Bruising or Pain at the Needle Site.<br>3.Fatigue.<br>4.Nausea or Fainting.<br>5.Iron Deficiency.';
        case 'Is there any disadvantages of blood donation?':
            return '1.Temporary discomfort such as pain or bruising at the needle site.<br>2.Time commitment of about an hour per donation session.<br>3.Health restrictions based on certain medical conditions or medications.<br>4.Risk of iron deficiency over time, especially in frequent donors.<br>5.otential for feeling faint or dizzy during or after donation.<br>6.Inconvenience for some individuals due to scheduling or medical reasons.';
        case 'What are advantages of blood donation?':
            return '1.Potential to save lives by providing essential blood components to patients in need.<br>2.Contribution to medical treatments for various conditions, including surgeries, cancer treatments, and emergencies.<br>3.Opportunity to help individuals suffering from blood disorders, such as anemia or hemophilia.<br>4.Health benefits for the donor, including reduced risk of certain diseases by promoting the regeneration of blood cells.<br>5.Satisfaction of altruism and community service, knowing that ones donation can make a significant difference in someone elses life.<br>6.Access to free health screenings, including tests for blood pressure, hemoglobin levels, and infectious diseases, which can help donors monitor their health.<br>7.Formation of a sense of unity and support within communities as individuals come together to donate blood for a common cause.';
        case 'How to open account in life saviour website?':
            return '1.Go to Login > Donor Login<br>2.Click on signup<br>3.Enter your email and create password<br>4.Enter your Email and created password,you will jump to profile.<br>5.fill all details and submit profile.<br>6.Once admin verifies your account you can now access all the services provided.';
        case 'How can i organize blood donation camp?':
            return '1.Go to Camp > Organize camp.<br>2.fill all details in the form and click next.<br>3.Fill next form and click submit.<br>4.You will be informed with status of your request on Gmail.<br>5.Contact on Mobile no. sent through gmail for next processing.';
        case 'How can i request blood from blood bank?':
            return '1.Go to Blood Requisition > Download Form.<br>2.fill all details in the form with help of doctor take a stamp or sign of doctor on downloaded form.<br>3.Go to Blood requisition > Request blood.<br>4.Fill details on the form and upload photo of downloaded form with doctor sign or stamp.<br>5.Status ofyour blood request wil be sent on gmail.';
        default:
            return 'I am not programmed to answer that question.';
    }
}
