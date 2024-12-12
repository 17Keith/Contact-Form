<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Form</title>
    <style>
        /* Base styling */
        body {
            font-family: Arial, sans-serif;
            background-color: #2C3E50;
            /* Dark cohesive background */
            margin: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .container {
            text-align: center;
            width: 100%;
            max-width: 400px;
        }

        h2 {
            color: #ECF0F1;
            /* Light text color for contrast */
            margin-bottom: 20px;
        }

        /* Form styling */
        form {
            background-color: #34495E;
            /* Slightly lighter background for the form */
            border: 1px solid #2C3E50;
            border-radius: 10px;
            padding: 30px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        label {
            display: block;
            margin-bottom: 8px;
            font-weight: bold;
            color: #ECF0F1;
            /* Light text color */
        }

        input[type="text"],
        input[type="email"],
        textarea {
            width: 100%;
            padding: 12px;
            margin-bottom: 20px;
            border: 1px solid #BDC3C7;
            /* Neutral border color */
            border-radius: 5px;
            font-size: 14px;
            box-sizing: border-box;
            background-color: #ECF0F1;
            /* Light input background */
        }

        textarea {
            resize: none;
        }

        button {
            display: block;
            width: 100%;
            padding: 12px;
            background-color: #1ABC9C;
            /* Cohesive green accent */
            color: white;
            font-size: 16px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        button:hover {
            background-color: #16A085;
            /* Darker green on hover */
        }

        /* Message styling */
        p {
            color: #1ABC9C;
            /* Matching green for success messages */
            font-weight: bold;
            margin-top: 20px;
        }

        /* Media query for responsiveness */
        @media (max-width: 768px) {
            body {
                padding: 20px;
            }

            form {
                padding: 20px;
            }

            h2 {
                font-size: 24px;
            }

            input[type="text"],
            input[type="email"],
            textarea,
            button {
                font-size: 16px;
            }
        }
    </style>
</head>

<body>
    <div class="container">
        <h2>Contact Us</h2>
        @if(Session::has('message'))
            <p>{{ Session::get('message') }}</p>
        @endif
        <form action="{{ route('contact.send') }}" method="POST">
            @csrf
            <label for="name">Name:</label>
            <input type="text" name="name" id="name" required>

            <label for="email">Email:</label>
            <input type="email" name="email" id="email" required>

            <label for="message">Message:</label>
            <textarea name="message" id="message" rows="4" required></textarea>

            <button type="submit">Send Message</button>
        </form>
    </div>
</body>

</html>