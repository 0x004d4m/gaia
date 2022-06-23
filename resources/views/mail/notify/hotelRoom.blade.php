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
            <h3>New Hotel Room Booking</h3>
            <table class="table">
                <tr>
                    <td>
                        Hotel Name
                    </td>
                    <td>
                        {{$BookedHotelRoom->hotelRoom->hotel->name_en}}
                    </td>
                </tr>
                <tr>
                    <td>
                        Room
                    </td>
                    <td>
                        {{$BookedHotelRoom->hotelRoom->name_en}}
                    </td>
                </tr>
                <tr>
                    <td>
                        Price
                    </td>
                    <td>
                        ${{$BookedHotelRoom->price}}
                    </td>
                </tr>
                <tr>
                    <td>
                        First Name
                    </td>
                    <td>
                        {{$BookedHotelRoom->first_name}}
                    </td>
                </tr>
                <tr>
                    <td>
                        Last Name
                    </td>
                    <td>
                        {{$BookedHotelRoom->last_name}}
                    </td>
                </tr>
                <tr>
                    <td>
                        Phone
                    </td>
                    <td>
                        {{$BookedHotelRoom->phone}}
                    </td>
                </tr>
                <tr>
                    <td>
                        Email
                    </td>
                    <td>
                        {{$BookedHotelRoom->email}}
                    </td>
                </tr>
                <tr>
                    <td>
                        Date Of Birth
                    </td>
                    <td>
                        {{$BookedHotelRoom->date_of_birth}}
                    </td>
                </tr>
                <tr>
                    <td>
                        Number Of People
                    </td>
                    <td>
                        {{$BookedHotelRoom->number_of_people}}
                    </td>
                </tr>
                <tr>
                    <td>
                        Passport Number
                    </td>
                    <td>
                        {{$BookedHotelRoom->passport_number}}
                    </td>
                </tr>
                <tr>
                    <td>
                        Passport Issue Date
                    </td>
                    <td>
                        {{$BookedHotelRoom->passport_issue_date}}
                    </td>
                </tr>
                <tr>
                    <td>
                        Passport Expiry Date
                    </td>
                    <td>
                        {{$BookedHotelRoom->passport_expiry_date}}
                    </td>
                </tr>
                <tr>
                    <td>
                        Nationality
                    </td>
                    <td>
                        {{$BookedHotelRoom->nationality}}
                    </td>
                </tr>
            </table>
        </div>
      </div>
    </div>
  </body>
</html>

