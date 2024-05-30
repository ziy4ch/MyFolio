
 @extends('master.layout')
 @section('content')
   <!-- ======= Students Section ======= -->
   <section id="/students" class="paralax-mf footer-paralax bg-image sect-mt4 route" style="background-image: url(assets/img/overlay-bg.jpg)">
    <div class="overlay-mf"></div>
    <div class="container">
      <div class="row">
        <div class="col-sm-12">
          <div class="contact-mf">
            <div id="contact" class="box-shadow-full">

              <button onclick="document.location ='/add-student'" type="button" class="btn btn-primary">Add new Records</button>
                    <table class="table table-dark">
                        <thead>
                          <tr>
                            <th scope="col">#</th>
                            <th scope="col">First</th>
                            <th scope="col">Last</th>
                            <th scope="col">Handle</th>
                          </tr>
                        </thead>
                        <tbody>
                            @foreach ($students as $student)
                            <tr>
                                <td>{{$student->matric_id}}</td>
                                <td>{{$student->first_name}}</td>
                                <td>{{$student->last_name}}</td>
                                <td>{{$student->email}}</td>
                                <td>{{$student->phone_no}}</td>
                            </tr>
                            @endforeach
                        </tbody>
                      </table>

                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section><!-- End Contact Section -->

</main><!-- End #main -->
@endsection
