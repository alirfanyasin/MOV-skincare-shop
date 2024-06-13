<div>
  <h3 class="fw-bold text-center ">Masukan Kode OTP</h3>
  <h5 class="text-center mb-5">Kode telah dikirm melalui email anda</h5>
  <div class="otp-field mb-4">
    <input type="number" />
    <input type="number" disabled />
    <input type="number" disabled />
    <input type="number" disabled />
  </div>

  <div class="d-flex justify-content-center">
    <button class="btn dark-cream-bg text-white fw-semibold btn-verify">
      Verify OTP
    </button>
  </div>

  {{-- <button class="btn btn-primary mb-3">
    Verify
  </button> --}}


  <style>
    .btn-verify:hover {
      background-color: #F7B787;
    }

    .otp-field {
      flex-direction: row;
      column-gap: 10px;
      display: flex;
      align-items: center;
      justify-content: center;
    }

    .otp-field input {
      height: 45px;
      width: 42px;
      border-radius: 6px;
      outline: none;
      font-size: 1.125rem;
      text-align: center;
      border: 1px solid #ddd;
    }

    .otp-field input:focus {
      box-shadow: 0 1px 0 rgba(0, 0, 0, 0.1);
    }

    .otp-field input::-webkit-inner-spin-button,
    .otp-field input::-webkit-outer-spin-button {
      display: none;
    }

    .resend {
      font-size: 12px;
    }

    .footer {
      position: absolute;
      bottom: 10px;
      right: 10px;
      color: black;
      font-size: 12px;
      text-align: right;
      font-family: monospace;
    }

    .footer a {
      color: black;
      text-decoration: none;
    }
  </style>

  <script>
    const inputs = document.querySelectorAll(".otp-field > input");
    const button = document.querySelector(".btn");

    window.addEventListener("load", () => inputs[0].focus());
    button.setAttribute("disabled", "disabled");

    inputs[0].addEventListener("paste", function(event) {
      event.preventDefault();

      const pastedValue = (event.clipboardData || window.clipboardData).getData("text");
      const otpLength = inputs.length;

      for (let i = 0; i < otpLength; i++) {
        if (i < pastedValue.length) {
          inputs[i].value = pastedValue[i];
          inputs[i].removeAttribute("disabled");
          inputs[i].focus();
        } else {
          inputs[i].value = ""; // Clear any remaining inputs
          inputs[i].focus();
        }
      }
    });

    inputs.forEach((input, index1) => {
      input.addEventListener("keyup", (e) => {
        const currentInput = input;
        const nextInput = input.nextElementSibling;
        const prevInput = input.previousElementSibling;

        if (currentInput.value.length > 1) {
          currentInput.value = "";
          return;
        }

        if (nextInput && nextInput.hasAttribute("disabled") && currentInput.value !== "") {
          nextInput.removeAttribute("disabled");
          nextInput.focus();
        }

        if (e.key === "Backspace") {
          inputs.forEach((input, index2) => {
            if (index1 <= index2 && prevInput) {
              input.setAttribute("disabled", true);
              input.value = "";
              prevInput.focus();
            }
          });
        }

        button.classList.remove("active");
        button.setAttribute("disabled", "disabled");

        const inputsNo = inputs.length;
        if (!inputs[inputsNo - 1].disabled && inputs[inputsNo - 1].value !== "") {
          button.classList.add("active");
          button.removeAttribute("disabled");

          // Check if all inputs are filled
          const allFilled = Array.from(inputs).every(input => input.value !== "");
          if (allFilled) {
            // Redirect to /success
            window.location.href = "/success";
          }

          return;
        }
      });
    });
  </script>

</div>
