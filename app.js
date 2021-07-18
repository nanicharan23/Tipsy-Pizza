//signup
const signupForm=document.querySelector('#signup-form');
signupForm.addEventListener('submit',(e)=>{
     e.preventDefault();
     // get user info
     const email=signupForm['signup-email'].value;
     const password=signupForm['signup-password'].value;
     console.log(email,password);

     //sign up the user
     auth.createUserWithEmailAndPassword(email,password).then(cred=>{
      //    console.log(cred.user.email);
          const modal=document.querySelector('#modal-signup');
          M.Modal.getInstance(modal).close();
          signupForm.reset();
     });
});

//Listening status whether we're logged in or not.

auth.onAuthStateChanged(user=>{
     if (user)
     {
         // console.log('user logged in:',user);
         db.collection('guides').get().then((snapshot)=>{
          setupGuides(snapshot.docs);
          setupUI(user);
     })
     
     }
     else{
      //    console.log('user logged out:',user);
      setupUI();
      setupGuides([]);
     }
})