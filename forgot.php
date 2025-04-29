<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forgot Password</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <style>
        .floating-label {
            transition: all 0.3s ease;
        }
        .input-field:focus ~ .floating-label,
        .input-field:not(:placeholder-shown) ~ .floating-label {
            transform: translateY(-32px) scale(0.85);
            background: rgba(255, 255, 255, 0.05);
            padding: 0 5px;
            color: #10B981;
        }
    </style>
</head>
<body class="bg-gray-100 min-h-screen flex items-center justify-center">
    <div class="bg-white p-8 rounded-lg shadow-md w-full max-w-md">
        <div class="text-center mb-6">
            <h1 class="text-2xl font-bold text-gray-800">Forgot Password</h1>
            <p class="text-gray-600 mt-2">Enter your email to reset your password</p>
        </div>
        
        <form  action="#" class="space-y-4">
        <div class="relative">
                        <input id="email" name="email" type="email" autocomplete="email" required 
                            class="input-field relative block w-full px-3 py-3 border border-gray-300 placeholder-gray-500 text-gray-900 rounded-lg focus:outline-none focus:ring-green-500 focus:border-green-500 focus:z-10 sm:text-sm"
                            placeholder=" ">
                        <label for="email" class="floating-label absolute left-3 top-3 text-gray-500 pointer-events-none">Email address</label>
                    </div>
            
            <div class="flex items-center justify-center">
                
                <div>
                    <button type="submit" class="group relative w-full flex justify-center py-3 px-4 border border-transparent text-sm font-medium rounded-lg text-white bg-green-600 hover:bg-green-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-green-500 transition-all">Send Reset Link </button>
                </div>
            </div>
            <div class="mt-4 text-center">
                <a href="http://localhost/horti/auth/login.php" class="text-blue-600 font-bold hover:underline text-l">Back to Login</a>
            </div>
        </form>
        
    </div>
</body>
</html>