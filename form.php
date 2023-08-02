
<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Contact Form To Email Using Javascript</title>
        <link rel="stylesheet" href="style2.css">
    </head>
    <body>
        <div class="container">
            <form action="homeserve.php" method="post">
                <h3>Service Booking Form</h3>
                <input type="text" id="name" name="name" placeholder="Your Name" required>
                <input type="email" id="email" name="email" placeholder="Email id" required>
                <input type="text" id="phone" name="phone" placeholder="Phone no" required>
                <input type="text" id="address" name="address" placeholder="Address" required>
                <select name="District" id="District" required>
                    <option value="">select the District</option>
                    
                    <option value="thoothukudi">thoothukudi</option>
                    <option value="thirunelveli">thirunelveli</option>
                    <option value="chennai">chennai</option>
                    <option value="Thiruchirapalli">Thiruchirapalli</option>
                    <option value="virudhunagar">virudhunagar</option>
                    <option value="Aruppukottai">Aruppukottai</option>
                    <option value="madurai">madurai</option>
                    <option value="Erode">Erode</option>
                    <option value="karur">karur</option>
                    <option value="kanyakumari">kanyakumari</option>
                    <option value="salem">salem</option>
                </select>
                <textarea type="text" id="message" name="message" rows="4" placeholder="How can we help you?"></textarea>
                <button type="submit">Send</button>
            </form>
        </div>
      
    </body>
</html> 
