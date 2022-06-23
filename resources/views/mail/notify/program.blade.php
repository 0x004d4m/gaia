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
            <h3>New Program Booking</h3>
            <table class="table">
                <tr>
                    <td>
                        Program Name
                    </td>
                    <td>
                        {{$BookedProgram->program->name_en}}
                    </td>
                </tr>
                <tr>
                    <td>
                        Price
                    </td>
                    <td>
                        ${{$BookedProgram->price}}
                    </td>
                </tr>
                <tr>
                    <td>
                        First Name
                    </td>
                    <td>
                        {{$BookedProgram->first_name}}
                    </td>
                </tr>
                <tr>
                    <td>
                        Last Name
                    </td>
                    <td>
                        {{$BookedProgram->last_name}}
                    </td>
                </tr>
                <tr>
                    <td>
                        Phone
                    </td>
                    <td>
                        {{$BookedProgram->phone}}
                    </td>
                </tr>
                <tr>
                    <td>
                        Email
                    </td>
                    <td>
                        {{$BookedProgram->email}}
                    </td>
                </tr>
                <tr>
                    <td>
                        Date Of Birth
                    </td>
                    <td>
                        {{$BookedProgram->date_of_birth}}
                    </td>
                </tr>
                <tr>
                    <td>
                        Number Of People
                    </td>
                    <td>
                        {{$BookedProgram->number_of_people}}
                    </td>
                </tr>
                <tr>
                    <td>
                        Passport Number
                    </td>
                    <td>
                        {{$BookedProgram->passport_number}}
                    </td>
                </tr>
                <tr>
                    <td>
                        Passport Issue Date
                    </td>
                    <td>
                        {{$BookedProgram->passport_issue_date}}
                    </td>
                </tr>
                <tr>
                    <td>
                        Passport Expiry Date
                    </td>
                    <td>
                        {{$BookedProgram->passport_expiry_date}}
                    </td>
                </tr>
                <tr>
                    <td>
                        Nationality
                    </td>
                    <td>
                        {{$BookedProgram->nationality}}
                    </td>
                </tr>
            </table>
        </div>
      </div>
    </div>
  </body>
</html>

