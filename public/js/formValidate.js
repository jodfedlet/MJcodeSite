// $(document).ready(()=>{
//     $(document).on('click','#send',function(e){
//         e.preventDefault()
//         const form = document.querySelector('#contactForm')

//         let name = form.name.value
//         let email = form.email.value
//         let phone = form.phone.value
//         let message = form.message.value
            
//         $.ajax({
//             type: 'post',
//             url: '/contact/save',
//             data: {
//                 name: name,
//                 email:email,
//                 phone:phone,
//                 message:message
//             }
//         })

//     })
// })

// function validateName(input) {
//     if (input == '' || input.length < 6){
//       alert('please enter a correct Name')
//       return false
//      }
// }

// function validateEmail(email) {
//     if (    email == '' || email.length < 6){
//       alert('please enter a correct email')
//      }
// }

// function validatePhone(phone) {
//     if (phone == '' || phone.length < 6){
//       alert('please enter a correct phone number')
//      }
// }

// function validateMessage(message) {
//     if (message == '' || message.length < 6){
//       alert('please enter a correct message')
//      }
// }

