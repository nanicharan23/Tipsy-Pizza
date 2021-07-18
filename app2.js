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
      var username=createUsername(cred.user.email);
      cred.displayName=username;
          signupForm.reset();
     });
});


//Login
const loginForm = document.querySelector('#login-form');
loginForm.addEventListener('submit',(e)=>{
   //  e.preventDefault();

     //get user info
     const email = loginForm['login-email'].value;
     const password = loginForm['login-password'].value;
     //console.log(email,password);
     auth.signInWithEmailAndPassword(email,password).then(cred=>{
          loginForm.reset();
     })
});
function createUsername(email)
{
     var ans="";
     for (var i = 0; i < email.length; i++) {
          if(email.charAt(i)=='@')
          break;
          ans+=(email.charAt(i));
        }
        console.log(ans);
        return ans;
}
//logout
const logout=document.querySelector('#logout');
logout.addEventListener('click',(e)=>{
     e.preventDefault();
     auth.signOut();
})

//Listening status whether we're logged in or not.
const loggedOutLinks=document.querySelectorAll('.loggedout');
const loggedinLinks=document.querySelectorAll('.loggedin');
auth.onAuthStateChanged(user=>{
     if (user)
     {
          console.log('user logged in:',user);
          loggedOutLinks.forEach(item=>item.style.display='none');
          loggedinLinks.forEach(item=>item.style.display='block');
//console.log(user.email);
          const username=document.querySelector('.username');
          console.log(user.displayName);
          username.innerHTML=user.email;
     }
     else{
      console.log('user logged out:',user);
      loggedOutLinks.forEach(item=>item.style.display='block');
      loggedinLinks.forEach(item=>item.style.display='none');
     }
})