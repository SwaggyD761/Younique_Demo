<script>
      const form = document.querySelector('#appointment-form');
      const dateInput = document.querySelector('#date');
      const timeInput = document.querySelector('#time');

      // Add event listener for form submission
      form.addEventListener('submit', (event) => {
        event.preventDefault(); // Prevent the default form submission

        if (form.checkValidity()) {
          // If the form is valid, submit it
          submitForm();
        } else {
          // If the form is not valid, show error messages
          showErrors();
        }
      });

      // Add date picker and time picker
      dateInput.valueAsDate = new Date(); // Set the default date to today's date
      timeInput.value = '09:00'; // Set the default time to 9:00 AM

      // Function to submit the form
      function submitForm() {
        // Here, you can send the form data to the server using Ajax or fetch
        console.log('Form submitted!');
      }

      // Function to show error messages
      function showErrors() {
        // Get all the invalid form controls
        const invalidControls = form.querySelectorAll(':invalid');

        // Loop through the invalid form controls and show error messages
        invalidControls.forEach((control) => {
          const errorMessage = control.validationMessage;
          const errorLabel = form.querySelector(`label[for="${control.id}"]`);
          errorLabel.classList.add('error');
          errorLabel.setAttribute('data-error', errorMessage);
        });
      }
    </script>
