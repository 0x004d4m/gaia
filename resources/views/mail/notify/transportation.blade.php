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
            <h3>New Transportation Booking</h3>
            <table class="table">
                <tr>
                    <td>
                        From
                    </td>
                    <td>
                        {{$BookedTransportation->transportation->locationFrom->name}}
                    </td>
                </tr>
                <tr>
                    <td>
                        To
                    </td>
                    <td>
                        {{$BookedTransportation->transportation->locationTo->name}}
                    </td>
                </tr>
                <tr>
                    <td>
                        Price
                    </td>
                    <td>
                        ${{$BookedTransportation->price}}
                    </td>
                </tr>
                <tr>
                    <td>
                        First Name
                    </td>
                    <td>
                        {{$BookedTransportation->first_name}}
                    </td>
                </tr>
                <tr>
                    <td>
                        Last Name
                    </td>
                    <td>
                        {{$BookedTransportation->last_name}}
                    </td>
                </tr>
                <tr>
                    <td>
                        Phone
                    </td>
                    <td>
                        {{$BookedTransportation->phone}}
                    </td>
                </tr>
                <tr>
                    <td>
                        Email
                    </td>
                    <td>
                        {{$BookedTransportation->email}}
                    </td>
                </tr>
                <tr>
                    <td>
                        Date Of Birth
                    </td>
                    <td>
                        {{$BookedTransportation->date_of_birth}}
                    </td>
                </tr>
                <tr>
                    <td>
                        Number Of People
                    </td>
                    <td>
                        {{$BookedTransportation->number_of_people}}
                    </td>
                </tr>
                <tr>
                    <td>
                        Passport Number
                    </td>
                    <td>
                        {{$BookedTransportation->passport_number}}
                    </td>
                </tr>
                <tr>
                    <td>
                        Passport Issue Date
                    </td>
                    <td>
                        {{$BookedTransportation->passport_issue_date}}
                    </td>
                </tr>
                <tr>
                    <td>
                        Passport Expiry Date
                    </td>
                    <td>
                        {{$BookedTransportation->passport_expiry_date}}
                    </td>
                </tr>
                <tr>
                    <td>
                        Nationality
                    </td>
                    <td>
                        {{$BookedTransportation->nationality}}
                    </td>
                </tr>
            </table>
        </div>
      </div>
    </div>
  </body>
</html>

