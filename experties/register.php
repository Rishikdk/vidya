<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="../style/expertise/register.css" />
    <title>Experties</title>
  </head>
  <body>
    <div class="containers">
      <h1>Expertise Registration</h1>
      <form
        enctype="multipart/form-data"
        method=""
        action=""
        onsubmit="return validateForm()"
      >
        <div class="continer_info">
          <div class="name">
            <input
              type="text"
              name="fname"
              id="fname"
              placeholder="Enter First Name"
              required
            />
            <input
              type="text"
              name="lname"
              id="lname"
              placeholder="Enter last Name"
              required
            />
          </div>

          <div class="contacts">
            <input
              type="email"
              name="email"
              id="email"
              placeholder="Enter Email"
              required
            />
            <input
              type="text"
              name="address"
              id="address"
              placeholder="Enter Address"
              required
            />
            <input
              type="number"
              name="pnum"
              id="pnum"
              placeholder="Enter Phone number"
              required
            />
            <!-- <input type="password" name="password" id="password" placeholder="Enter password" required> -->
          </div>

          <div class="pass">
            <input
              type="password"
              name="password"
              id="password"
              placeholder="Enter your password"
              maxlength="20"
              required
            />
            <input
              type="password"
              name="confirmpassword"
              id="confirmpassword"
              placeholder="Confirm your password"
              maxlength="20"
              required
            />
          </div>

          <!-- <tr>
            <td>Gender</td>
            <td><input type="radio" name="gender" id="male" /> Male</td>
            <td><input type="radio" name="gender" id="female" /> Female</td>
          </tr> -->
          <div class="work">
            <input
              type="text"
              name="profession"
              id="profession"
              placeholder="Enter profession"
              required
            />
            <input
              type="text"
              name="Instution"
              id="Instution"
              placeholder="Enter Instution name"
              required
            />
          </div>
        </div>

        <div class="container_img">
          <div class="doc_img">
            <label>Your picture:</label>
            <input
              type="file"
              name="pimg"
              id="pimg"
              accept="image/*"
              onchange="preview(this, 'profilePreview')"
              required
            />
            <img id="profilePreview" />
            <br /><label>Document/Certificate:</label>
            <input
              type="file"
              name="doc"
              id="doc"
              accept="image/*"
              onchange="preview(this, 'docPreview')"
              required
            />
            <img id="docPreview" />
          </div>

          <div class="citizen">
            <label>Citizen Front side:</label>
            <input
              type="file"
              name="image"
              id="cimg"
              accept="image/*"
              onchange="preview(this, 'frontPreview')"
              required
            />
            <img id="frontPreview" />
            <br /><label>Citizen Back side:</label>
            <input
              type="file"
              name="image"
              id="cbimg"
              accept="image/*"
              onchange="preview(this, 'backPreview')"
              required
            />
            <img id="backPreview" />
          </div>
        </div>

        <div class="submit">
          <textarea
            type="textarea"
            name="des"
            id="des"
            placeholder="Write about you"
          ></textarea>
          <button class="btn-primary takespace">Register</button>
        </div>
      </form>
    </div>

    <script>
      function validateForm() {
        var password = document.getElementById("password").value;
        var pnum = document.getElementById("pnum").value;
        var confirmpassword = document.getElementById("confirmpassword").value;

        if (password != confirmpassword) {
          alert("Passwords do not match.");
          return false;
        }
        if (pnum.length < 8) {
          alert("Please provide a valid Phone Number!");
          return false;
        }
        return true;
      }

      // document
      //   .getElementById("pimg")
      //   .getElementById("doc")
      //   .getElementById("cimg")
      //   .getElementById("cbimg")
      //   .addEventListener("change", function (event) {
      //     var file = event.target.files[0];
      //     var reader = new FileReader();

      //     reader.onload = function (e) {
      //       var previewImage = document.getElementById("previewImage");
      //       previewImage.src = e.target.result;
      //       previewImage.style.display = "block";
      //     };

      //     reader.readAsDataURL(file);
      //   });

      function preview(input, previewId) {
        var file = input.files[0];
        var reader = new FileReader();
        reader.onload = function (e) {
          var preview = document.getElementById(previewId);
          preview.src = e.target.result;
        };
        reader.readAsDataURL(file);
      }
    </script>
  </body>
</html>
