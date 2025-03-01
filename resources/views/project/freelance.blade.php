<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://unpkg.com/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://unpkg.com/bs-brain@2.0.4/components/registrations/registration-3/assets/css/registration-3.css">
</head>
<body>
<!-- Registration 3 - Bootstrap Brain Component -->
<section class="p-3 p-md-4 p-xl-5">
  <div class="container">
    <div class="row">
      <div class="col-12 col-md-6 bsb-tpl-bg-platinum">
        <div class="d-flex flex-column justify-content-between h-80 p-3 p-md-4 p-xl-5">
          <h3 class="m-0">Welcome to Freelancer!</h3>
          <img class="img-fluid rounded mx-auto my-4" loading="lazy" src="{{ asset('login_ui/img/freelancer.jpg') }}" width="245" height="80" alt="BootstrapBrain Logo">
          <!-- <p class="mb-0">Not a member yet? <a href="#!" class="link-secondary text-decoration-none">Register now</a></p> -->
        </div>
      </div>
      <div class="col-12 col-md-6 bsb-tpl-bg-lotion">
        <div class="p-3 p-md-4 p-xl-5">
          <div class="row">
            <div class="col-12">
              <div class="mb-5">
                <h2 class="h3">Freelancer</h2>
                <!-- <h3 class="fs-6 fw-normal text-secondary m-0">Enter your details to register</h3> -->
              </div>
            </div>
          </div>
          <form action="{{ route('freelance.store') }}" method="post">
            @csrf
            <div class="row gy-3 gy-md-4 overflow-hidden">
              <div class="col-12">
                <label for="name" class="form-label">Name <span class="text-danger">*</span></label>
                <input type="text" class="form-control" name="name" id="title" placeholder="name" >
                @error('name')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
              </div>
              <div class="col-12">
                <label for="title" class="form-label">Title<span class="text-danger">*</span></label>
                <input type="textarea" class="form-control" name="title" id="title" placeholder="title" >
                @error('title')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror

              </div>
              <div class="col-12">
                <label for="tag" class="form-label">Tags <span class="text-danger">*</span></label>
                <input type="text" class="form-control" name="tag" id="tag" placeholder="Tag" >
                @error('tag')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror

              </div>
              <div class="col-12">
                <label for="hour" class="form-label">Hour<span class="text-danger">*</span></label>
                <input type="text" class="form-control" name="hour" id="hour" value="" >
                @error('hour')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror

              </div>
              <div class="col-12">
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" value="" name="iAgree" id="iAgree" required>
                  <label class="form-check-label text-secondary" for="iAgree">   
                    I agree to the <a href="#!" class="link-primary text-decoration-none">terms and conditions</a>
                  </label>
                </div>
              </div>
              <div class="col-12">
                <div class="d-grid">
                  <button class="btn bsb-btn-xl btn-primary" type="submit"> freelancer</button>
                </div>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</section>
</body>
</html>