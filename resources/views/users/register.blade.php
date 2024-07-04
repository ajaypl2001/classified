<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Register User Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>
    <div class="container-fluid">
        <h5 class="text-center pt-5">Register Form</h5>
        <div>
            <form action="{{ route('register') }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="row">

                    <div class="mb-3 col-4">
                        <label for="exampleInputUserFbID" class="form-label">UserFbID</label>
                        <input type="text" name="UserFbID" class="form-control" id="exampleInputUserFbID"
                            aria-describedby="emailHelp">
                    </div>
                    <div class="mb-3 col-4">
                        <label for="exampleInputUserName" class="form-label">UserName</label>
                        <input type="text" name="UserName" class="form-control" id="exampleInputUserName"
                            aria-describedby="emailHelp">
                    </div>
                    <div class="mb-3 col-4">
                        <label for="exampleInputUserFile" class="form-label">UserFile</label>
                        <input type="file" name="UserFile" class="form-control" id="exampleInputUserFile"
                            aria-describedby="emailHelp">
                    </div>
                </div>
                <div class="row">
                    <div class="mb-3 col-4">
                        <label for="exampleInputUserEmail" class="form-label">UserEmail</label>
                        <input type="email" name="UserEmail" class="form-control" id="UserEmail"
                            aria-describedby="emailHelp">
                    </div>
                    <div class="mb-3 col-4">
                        <label for="exampleInputPassword1" class="form-label">Password</label>
                        <input type="password" name="UserPassword" class="form-control" id="exampleInputPassword1">
                    </div>
                    <div class="mb-3 col-4">
                        <label for="exampleInputUserMobile" class="form-label">UserMobile</label>
                        <input type="text" name="UserMobile" class="form-control" id="exampleInputUserMobile"
                            aria-describedby="emailHelp">
                    </div>
                </div>
                <div class="row">
                    <div class="mb-3 col-4">
                        <label for="exampleInputUserCountry" class="form-label">UserCountry</label>
                        <input type="text" name="UserCountry" class="form-control" id="exampleInputUserCountry"
                            aria-describedby="emailHelp">
                    </div>
                    <div class="mb-3 col-4">
                        <label for="exampleInputUserState" class="form-label">UserState</label>
                        <input type="text" name="UserState" class="form-control" id="exampleInputUserState"
                            aria-describedby="emailHelp">
                    </div>
                    <div class="mb-3 col-4">
                        <label for="exampleInputUserAddress" class="form-label">UserAddress</label>
                        <input type="text" name="UserAddress" class="form-control" id="exampleInputUserAddress"
                            aria-describedby="emailHelp">
                    </div>
                </div>
                <div class="row">
                    <div class="mb-3 col-4">
                        <label for="exampleInputUserEmailCode" class="form-label">UserEmailCode</label>
                        <input type="text" name="UserEmailCode" class="form-control" id="exampleInputUserEmailCode"
                            aria-describedby="emailHelp">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="1"
                                id="flexCheckIndeterminate">
                            <label class="form-check-label" for="flexCheckIndeterminate">
                                UserEmailVerify
                            </label>
                        </div>
                    </div>

                    <div class="mb-3 col-4">
                        <label for="exampleInputUserAbout" class="form-label">UserAbout</label>
                        <input type="text" name="UserAbout" class="form-control" id="exampleInputUserAbout"
                            aria-describedby="emailHelp">
                    </div>
                    <div class="mb-3 col-4">
                        <label for="exampleInputUserAccount" class="form-label">UserAccount</label>
                        <input type="text" name="UserAccount" class="form-control" id="exampleInputUserAccount"
                            aria-describedby="emailHelp">
                    </div>
                </div>
                <div class="row">
                    <div class="mb-3 col-4">
                        <label for="exampleInputusers_notify" class="form-label">users notify</label>
                        <input type="text" name="users_notify" class="form-control" id="exampleInputusers_notify"
                            aria-describedby="emailHelp">
                    </div>
                    <div class="mb-3 col-4">
                        <label for="exampleInputUserCreated" class="form-label">UserCreated</label>
                        <input type="date" name="UserCreated" class="form-control" id="exampleInputUserCreated"
                            aria-describedby="emailHelp">
                    </div>
                    <div class="mb-3 col-4">
                        <label for="exampleInputUserLoginDate" class="form-label">UserLoginDate</label>
                        <input type="date" name="UserLoginDate" class="form-control" id="exampleInputUserLoginDate"
                            aria-describedby="emailHelp">
                    </div>
                </div>
                <div class="row">
                    <div class="mb-3 col-4">
                        <label for="exampleInputUserModified" class="form-label">UserModified</label>
                        <input type="date" name="UserModified" class="form-control" id="exampleInputUserModified"
                            aria-describedby="emailHelp">
                    </div>
                    <div class="mb-3 col-4">
                        <label for="exampleInputUserDelete" class="form-label">UserDelete</label>
                        <input type="text" name="UserDelete" class="form-control" id="exampleInputUserDelete"
                            aria-describedby="emailHelp">
                    </div>
                    <div class="mb-3 col-4">
                        <label for="exampleInputnotify_status" class="form-label">Notify status</label>
                        <input type="text" name="notify_status" class="form-control" id="exampleInputnotify_status"
                            aria-describedby="emailHelp">
                    </div>
                </div>
            <div class="row justify-content-center mt-5">
<div class="col-6">

    <input type="submit" class="btn btn-primary form-control" value="Create">
</div>
            </div>

            </div>
            </form>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
</body>

</html>
