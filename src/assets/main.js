document.addEventListener('DOMContentLoaded', function () {
  const requestBtn = document.getElementById('request-btn');

  requestBtn.addEventListener('click', (e) => {
    e.preventDefault();

    const firstName = document.getElementById('first-name');
    const lastName = document.getElementById('last-name');
    const orgName = document.getElementById('org-name');
    const enrollCap = document.getElementById('enroll-cap');
    const phone = document.getElementById('phone-num');
    const preChild = document.getElementById('pre-child');

    const hubSpotApi =
      'https://api.hsforms.com/submissions/v3/integration/submit/2716595/7ce26e6b-c41c-46b1-acf5-879dedf86f87';

    const formData = {
      name: firstName.value,
      lastName: lastName.value,
      orgName: orgName.value,
      enrollCap: enrollCap.value,
      phone: phone.value,
      preChild: preChild.value,
    };

    const objValueArr = Object.values(formData);

    if (objValueArr.indexOf('') > -1) {
      alert('All fields must be fullfiled!');
      return;
    }

    //since I do not have access to the form in hubspot the fields are not correct and the request is returning 404
    //In order to work properly form fields must be ajusted to what hubspot is expecting, so editing formData to the correct
    //organization is a must

    fetch(hubSpotApi, {
      method: 'POST', // or 'PUT'
      headers: {
        'Content-Type': 'application/json',
      },
      body: JSON.stringify(formData),
    })
      .then((response) => response.json())
      .then((data) =>
        data.status === 'error'
          ? alert(
              'Post request worked, but this form do not match the form at hubspot'
            )
          : ''
      );
  });
});
