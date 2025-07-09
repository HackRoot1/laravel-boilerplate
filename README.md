## Main Functionality & Topics

1. Authentication & Authorization            
2. Roles and Permissions          
3. Form Folder with pre-defined reusable form inputs      
4. Reusable Components folder 
5. CRUD operations for student 
6. Countries - States - Cities migration & seeder files 
7. Proper design patterns 
8. File upload & image optimization 
9. PDF generation for invoices 
10. Proper Routes 
11. Logs Activity 
12. Mail setup 
13. Payment integration 
14. SMS / Google Login / Facebook Login / GitHub Login 
15. Captcha added 
16. OTP Verification 
17. Forgot Password checking 
18. 







## Form Input Lists 

```
<form method="POST" enctype="multipart/form-data">
    @csrf
    <input type="text" name="name">
    <input type="email" name="email">
    <input type="password" name="password">
    <input type="password" name="password_confirmation">
    <input type="tel" name="phone">
    <input type="number" name="age">
    <textarea name="bio"></textarea>
    <input type="checkbox" name="is_active" value="1">
    <select name="gender">
        <option value="male">Male</option>
        <option value="female">Female</option>
        <option value="other">Other</option>
    </select>
    <select name="role_id">
        <option value="1">Admin</option>
        <option value="2">User</option>
    </select>
    <input type="file" name="profile_picture">
    <input type="url" name="website">
    <input type="date" name="dob">
    <input type="time" name="appointment_time">
    <input type="color" name="color_preference">
    <input type="range" name="range_input" min="1" max="10">
    <input type="hidden" name="hidden_token" value="12345">
    <input type="checkbox" name="terms" value="1"> I agree
    <button type="submit">Submit</button>
</form>

```




## Validations List : 


```
use Illuminate\Support\Facades\Validator;

$requestData = $request->all();

$validator = Validator::make($requestData, [
    'name'              => 'required|string|max:255',
    'email'             => 'required|email|unique:users,email',
    'password'          => 'required|string|min:6|confirmed',
    'phone'             => 'nullable|digits:10',
    'age'               => 'nullable|integer|min:18|max:100',
    'bio'               => 'nullable|string|max:500',
    'is_active'         => 'nullable|boolean',
    'gender'            => 'required|in:male,female,other',
    'role_id'           => 'required|exists:roles,id',
    'profile_picture'   => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
    'website'           => 'nullable|url',
    'dob'               => 'nullable|date|before:today',
    'appointment_time'  => 'nullable|date_format:H:i',
    'color_preference'  => 'nullable|string',
    'range_input'       => 'nullable|numeric|min:1|max:10',
    'hidden_token'      => 'nullable|string',
    'terms'             => 'accepted', // For checkbox
]);
```