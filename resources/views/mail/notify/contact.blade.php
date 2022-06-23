<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <style>
            /* Add custom classes and styles that you want inlined here */
        </style>
    </head>
    <body class="bg-light">
        <div class="container">
        <div class="card my-10">
            <div class="card-body">
                <h3>New Contact Message</h3>
                <table class="table">
                    <tr>
                        <td>
                            First Name
                        </td>
                        <td>
                            {{$ContactMessage->first_name}}
                        </td>
                    </tr>
                    <tr>
                        <td>
                            Last Name
                        </td>
                        <td>
                            {{$ContactMessage->last_name}}
                        </td>
                    </tr>
                    <tr>
                        <td>
                            Phone
                        </td>
                        <td>
                            {{$ContactMessage->phone}}
                        </td>
                    </tr>
                    <tr>
                        <td>
                            Email
                        </td>
                        <td>
                            {{$ContactMessage->email}}
                        </td>
                    </tr>
                    <tr>
                        <td>
                            Subject
                        </td>
                        <td>
                            {{$ContactMessage->subject}}
                        </td>
                    </tr>
                </table>
                <h3>Message:</h3>
                {{$ContactMessage->message}}
            </div>
        </div>
        </div>
    </body>
    </html>

