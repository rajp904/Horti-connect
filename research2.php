<?php include 'includes/header.php';?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Horticulture Market Research | AgriAnalytics</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
    <style>
        /* Dark mode toggle button styles */
        .dark-mode-toggle {
            position: relative;
            width: 50px;
            height: 24px;
            border-radius: 12px;
            background-color: #e2e8f0;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        .dark-mode-toggle.dark {
            background-color: #4a5568;
        }

        .dark-mode-toggle .toggle-circle {
            position: absolute;
            top: 2px;
            left: 2px;
            width: 20px;
            height: 20px;
            border-radius: 50%;
            background-color: white;
            transition: transform 0.3s;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .dark-mode-toggle.dark .toggle-circle {
            transform: translateX(26px);
            background-color: #1a202c;
        }

        .dark-mode-toggle .toggle-icon {
            font-size: 12px;
            transition: opacity 0.3s;
        }

        .dark-mode-toggle .sun {
            color: #f6ad55;
            opacity: 1;
        }

        .dark-mode-toggle.dark .sun {
            opacity: 0;
        }

        .dark-mode-toggle .moon {
            color: #a0aec0;
            opacity: 0;
            position: absolute;
        }

        .dark-mode-toggle.dark .moon {
            opacity: 1;
        }
    </style>
</head>
<body class="bg-gray-50 dark:bg-gray-900">
    
<div class="container mx-auto px-4 py-8">
    <!-- Page Header -->
    <div class="mb-8">
        <h1 class="text-3xl font-bold text-gray-800 dark:text-white">Horticulture Market Intelligence</h1>
        <p class="text-gray-600 dark:text-gray-400 mt-2">Data-driven insights to optimize your horticulture business decisions</p>
    </div>
    
    <div class="flex flex-col lg:flex-row gap-8">
        <!-- Research Navigation -->
        <div class="w-full lg:w-1/4">
            <div class="bg-white dark:bg-gray-800 rounded-xl shadow-md p-6 sticky top-6">
                <div class="flex items-center m-8 ml-20">
                    <button id="darkModeToggle" class="dark-mode-toggle">
                        <span class="toggle-circle">
                            <i class="fas fa-sun toggle-icon sun"></i>
                            <i class="fas fa-moon toggle-icon moon"></i>
                        </span>
                    </button>
                </div>
                <div class="mb-6">
                    <div class="relative">
                        <input type="text" placeholder="Search research..." class="pl-10 pr-4 py-2.5 border border-gray-200 dark:border-gray-700 rounded-lg focus:outline-none focus:ring-2 focus:ring-green-500 dark:bg-gray-700 dark:text-white w-full">
                        <i class="fas fa-search absolute left-3 top-3.5 text-gray-400"></i>
                    </div>
                </div>
                
                <h3 class="text-lg font-bold mb-4 text-gray-800 dark:text-white flex items-center">
                    <i class="fas fa-chart-pie mr-2 text-green-600"></i>
                    Market Research
                </h3>
                
                <ul class="space-y-2">
                    <li>
                        <a href="#" class="flex items-center p-3 rounded-xl bg-green-50 dark:bg-gray-700 text-green-700 dark:text-green-400 font-medium">
                            <i class="fas fa-chart-line mr-3 text-green-600 dark:text-green-400"></i>
                            <span>Price Trends</span>
                            <i class="fas fa-chevron-right ml-auto text-sm text-gray-400"></i>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="flex items-center p-3 rounded-xl hover:bg-gray-100 dark:hover:bg-gray-700 text-gray-700 dark:text-gray-300 transition-colors">
                            <i class="fas fa-map-marked-alt mr-3 text-blue-500 dark:text-blue-400"></i>
                            <span>Regional Analysis</span>
                            <i class="fas fa-chevron-right ml-auto text-sm text-gray-400"></i>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="flex items-center p-3 rounded-xl hover:bg-gray-100 dark:hover:bg-gray-700 text-gray-700 dark:text-gray-300 transition-colors">
                            <i class="fas fa-calendar-alt mr-3 text-purple-500 dark:text-purple-400"></i>
                            <span>Seasonal Trends</span>
                            <i class="fas fa-chevron-right ml-auto text-sm text-gray-400"></i>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="flex items-center p-3 rounded-xl hover:bg-gray-100 dark:hover:bg-gray-700 text-gray-700 dark:text-gray-300 transition-colors">
                            <i class="fas fa-file-alt mr-3 text-yellow-500 dark:text-yellow-400"></i>
                            <span>Reports & Insights</span>
                            <i class="fas fa-chevron-right ml-auto text-sm text-gray-400"></i>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="flex items-center p-3 rounded-xl hover:bg-gray-100 dark:hover:bg-gray-700 text-gray-700 dark:text-gray-300 transition-colors">
                            <i class="fas fa-truck mr-3 text-red-500 dark:text-red-400"></i>
                            <span>Supply Chain</span>
                            <i class="fas fa-chevron-right ml-auto text-sm text-gray-400"></i>
                        </a>
                    </li>
                </ul>
                
                <div class="mt-8 p-4 bg-gradient-to-r from-green-50 to-blue-50 dark:from-gray-700 dark:to-gray-700 rounded-xl border border-green-100 dark:border-gray-600">
                    <div class="flex items-start mb-3">
                        <div class="bg-green-100 dark:bg-green-900 p-2 rounded-lg mr-3">
                            <i class="fas fa-headset text-green-600 dark:text-green-400"></i>
                        </div>
                        <div>
                            <h4 class="text-sm font-bold text-gray-800 dark:text-white mb-1">Need custom research?</h4>
                            <p class="text-xs text-gray-600 dark:text-gray-400">Our agricultural experts can provide tailored market analysis.</p>
                        </div>
                    </div>
                    <button class="w-full bg-green-600 hover:bg-green-700 text-white py-2.5 px-4 rounded-lg text-sm font-medium transition duration-300 flex items-center justify-center mt-2">
                        <i class="fas fa-envelope mr-2"></i> Request Analysis
                    </button>
                </div>
            </div>
        </div>
        
        <!-- Main Content -->
        <div class="w-full lg:w-3/4 space-y-6">
            <!-- Market Overview Cards -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
                <div class="bg-white dark:bg-gray-800 rounded-xl shadow-md p-5 border-l-4 border-green-500">
                    <div class="flex items-center justify-between">
                        <div>
                            <p class="text-sm text-gray-500 dark:text-gray-400">Avg. Tomato Price</p>
                            <h3 class="text-2xl font-bold text-gray-800 dark:text-white mt-1">₹45.20</h3>
                        </div>
                        <div class="bg-green-100 dark:bg-green-900 p-3 rounded-lg">
                            <i class="fas fa-rupee-sign text-green-600 dark:text-green-400"></i>
                        </div>
                    </div>
                    <p class="text-xs mt-3 text-green-600 dark:text-green-400 font-medium">
                        <i class="fas fa-arrow-up mr-1"></i> 12.5% from last month
                    </p>
                </div>
                
                <div class="bg-white dark:bg-gray-800 rounded-xl shadow-md p-5 border-l-4 border-blue-500">
                    <div class="flex items-center justify-between">
                        <div>
                            <p class="text-sm text-gray-500 dark:text-gray-400">Market Demand</p>
                            <h3 class="text-2xl font-bold text-gray-800 dark:text-white mt-1">High</h3>
                        </div>
                        <div class="bg-blue-100 dark:bg-blue-900 p-3 rounded-lg">
                            <i class="fas fa-chart-bar text-blue-600 dark:text-blue-400"></i>
                        </div>
                    </div>
                    <p class="text-xs mt-3 text-blue-600 dark:text-blue-400 font-medium">
                        <i class="fas fa-info-circle mr-1"></i> 15% higher than seasonal avg.
                    </p>
                </div>
                
                <div class="bg-white dark:bg-gray-800 rounded-xl shadow-md p-5 border-l-4 border-purple-500">
                    <div class="flex items-center justify-between">
                        <div>
                            <p class="text-sm text-gray-500 dark:text-gray-400">Best Selling Region</p>
                            <h3 class="text-2xl font-bold text-gray-800 dark:text-white mt-1">North</h3>
                        </div>
                        <div class="bg-purple-100 dark:bg-purple-900 p-3 rounded-lg">
                            <i class="fas fa-map-marker-alt text-purple-600 dark:text-purple-400"></i>
                        </div>
                    </div>
                    <p class="text-xs mt-3 text-purple-600 dark:text-purple-400 font-medium">
                        <i class="fas fa-rupee-sign mr-1"></i> Avg. ₹48/kg
                    </p>
                </div>
                
                <div class="bg-white dark:bg-gray-800 rounded-xl shadow-md p-5 border-l-4 border-yellow-500">
                    <div class="flex items-center justify-between">
                        <div>
                            <p class="text-sm text-gray-500 dark:text-gray-400">Harvest Forecast</p>
                            <h3 class="text-2xl font-bold text-gray-800 dark:text-white mt-1">+8%</h3>
                        </div>
                        <div class="bg-yellow-100 dark:bg-yellow-900 p-3 rounded-lg">
                            <i class="fas fa-seedling text-yellow-600 dark:text-yellow-400"></i>
                        </div>
                    </div>
                    <p class="text-xs mt-3 text-yellow-600 dark:text-yellow-400 font-medium">
                        <i class="fas fa-calendar-alt mr-1"></i> Next 3 months
                    </p>
                </div>
            </div>
            
            <!-- Price Trends Dashboard -->
            <div class="bg-white dark:bg-gray-800 rounded-xl shadow-md overflow-hidden">
                <div class="p-6 pb-4 border-b border-gray-100 dark:border-gray-700">
                    <div class="flex flex-col md:flex-row md:items-center md:justify-between">
                        <div>
                            <h2 class="text-xl font-bold text-gray-800 dark:text-white">Price Trends Analysis</h2>
                            <p class="text-sm text-gray-600 dark:text-gray-400 mt-1">Historical and predictive price trends for major horticulture crops</p>
                        </div>
                        <div class="flex items-center space-x-3 mt-4 md:mt-0">
                            <div class="relative">
                                <select id="cropSelect" class="appearance-none pl-4 pr-10 py-2 border border-gray-200 dark:border-gray-700 rounded-lg focus:outline-none focus:ring-2 focus:ring-green-500 dark:bg-gray-700 dark:text-white text-sm font-medium">
                                    <option>Tomatoes</option>
                                    <option>Potatoes</option>
                                    <option>Onions</option>
                                    <option>Bananas</option>
                                    <option>Mangoes</option>
                                    <option>Grapes</option>
                                </select>
                                <i class="fas fa-chevron-down absolute right-3 top-3 text-gray-400 text-xs"></i>
                            </div>
                            <div class="relative">
                                <select id="marketSelect" class="appearance-none pl-4 pr-10 py-2 border border-gray-200 dark:border-gray-700 rounded-lg focus:outline-none focus:ring-2 focus:ring-green-500 dark:bg-gray-700 dark:text-white text-sm font-medium">
                                    <option>All India</option>
                                    <option>North India</option>
                                    <option>South India</option>
                                    <option>East India</option>
                                    <option>West India</option>
                                </select>
                                <i class="fas fa-chevron-down absolute right-3 top-3 text-gray-400 text-xs"></i>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="p-6">
                    <div class="h-96">
                        <div id="advancedPriceChart"></div>
                    </div>
                    
                    <div class="mt-8 grid grid-cols-1 sm:grid-cols-3 gap-5">
                        <div class="bg-gradient-to-r from-green-50 to-green-100 dark:from-gray-700 dark:to-gray-800 p-4 rounded-xl border border-green-100 dark:border-gray-700">
                            <div class="flex items-center mb-2">
                                <div class="bg-green-500 bg-opacity-20 p-2 rounded-lg mr-3">
                                    <i class="fas fa-arrow-up text-green-600 dark:text-green-400 text-sm"></i>
                                </div>
                                <h4 class="text-sm font-medium text-gray-700 dark:text-gray-300">Current Price</h4>
                            </div>
                            <p class="text-2xl font-bold text-gray-800 dark:text-white">₹45.20</p>
                            <div class="flex items-center mt-2">
                                <span class="text-xs font-medium bg-green-100 dark:bg-green-900 text-green-800 dark:text-green-200 px-2 py-0.5 rounded-full">+12%</span>
                                <span class="text-xs text-gray-500 dark:text-gray-400 ml-2">vs last month</span>
                            </div>
                        </div>
                        
                        <div class="bg-gradient-to-r from-blue-50 to-blue-100 dark:from-gray-700 dark:to-gray-800 p-4 rounded-xl border border-blue-100 dark:border-gray-700">
                            <div class="flex items-center mb-2">
                                <div class="bg-blue-500 bg-opacity-20 p-2 rounded-lg mr-3">
                                    <i class="fas fa-exchange-alt text-blue-600 dark:text-blue-400 text-sm"></i>
                                </div>
                                <h4 class="text-sm font-medium text-gray-700 dark:text-gray-300">Price Range</h4>
                            </div>
                            <p class="text-2xl font-bold text-gray-800 dark:text-white">₹38 - ₹52</p>
                            <div class="flex items-center mt-2">
                                <span class="text-xs text-gray-500 dark:text-gray-400">last 6 months</span>
                            </div>
                        </div>
                        
                        <div class="bg-gradient-to-r from-purple-50 to-purple-100 dark:from-gray-700 dark:to-gray-800 p-4 rounded-xl border border-purple-100 dark:border-gray-700">
                            <div class="flex items-center mb-2">
                                <div class="bg-purple-500 bg-opacity-20 p-2 rounded-lg mr-3">
                                    <i class="fas fa-calendar-check text-purple-600 dark:text-purple-400 text-sm"></i>
                                </div>
                                <h4 class="text-sm font-medium text-gray-700 dark:text-gray-300">Best Selling Period</h4>
                            </div>
                            <p class="text-2xl font-bold text-gray-800 dark:text-white">Aug - Oct</p>
                            <div class="flex items-center mt-2">
                                <span class="text-xs font-medium bg-purple-100 dark:bg-purple-900 text-purple-800 dark:text-purple-200 px-2 py-0.5 rounded-full">Peak Season</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Regional Analysis -->
            <div class="bg-white dark:bg-gray-800 rounded-xl shadow-md overflow-hidden">
                <div class="p-6 pb-4 border-b border-gray-100 dark:border-gray-700">
                    <div class="flex flex-col md:flex-row md:items-center md:justify-between">
                        <div>
                            <h2 class="text-xl font-bold text-gray-800 dark:text-white">Regional Market Comparison</h2>
                            <p class="text-sm text-gray-600 dark:text-gray-400 mt-1">Price variations and demand across different regions</p>
                        </div>
                        <div class="mt-4 md:mt-0">
                            <div class="inline-flex rounded-md shadow-sm" role="group">
                                <button type="button" class="px-4 py-2 text-sm font-medium rounded-l-lg border border-gray-200 dark:border-gray-700 bg-white dark:bg-gray-700 text-gray-900 dark:text-white hover:bg-gray-50 dark:hover:bg-gray-600 focus:z-10 focus:ring-2 focus:ring-green-500">
                                    Weekly
                                </button>
                                <button type="button" class="px-4 py-2 text-sm font-medium border-t border-b border-gray-200 dark:border-gray-700 bg-white dark:bg-gray-700 text-gray-900 dark:text-white hover:bg-gray-50 dark:hover:bg-gray-600 focus:z-10 focus:ring-2 focus:ring-green-500">
                                    Monthly
                                </button>
                                <button type="button" class="px-4 py-2 text-sm font-medium rounded-r-lg border border-gray-200 dark:border-gray-700 bg-green-50 dark:bg-gray-600 text-green-700 dark:text-green-400 hover:bg-green-100 dark:hover:bg-gray-500 focus:z-10 focus:ring-2 focus:ring-green-500">
                                    Quarterly
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="p-6">
                    <div class="grid grid-cols-1 lg:grid-cols-3 gap-6">
                        <div class="lg:col-span-2">
                            <div class="h-80">
                                <div id="regionalMapChart"></div>
                            </div>
                        </div>
                        <div>
                            <div class="bg-gray-50 dark:bg-gray-700 rounded-xl p-4 h-full">
                                <h4 class="font-medium text-gray-800 dark:text-white mb-4">Top Performing Regions</h4>
                                
                                <div class="space-y-4">
                                    <div class="flex items-center">
                                        <div class="flex-shrink-0 h-10 w-10 rounded-lg bg-green-100 dark:bg-green-900 flex items-center justify-center">
                                            <span class="text-green-600 dark:text-green-400 font-bold">1</span>
                                        </div>
                                        <div class="ml-4">
                                            <p class="text-sm font-medium text-gray-800 dark:text-white">North India</p>
                                            <div class="flex items-center mt-1">
                                                <span class="text-sm text-green-600 dark:text-green-400 font-bold">₹48.50</span>
                                                <span class="text-xs bg-green-100 dark:bg-green-900 text-green-800 dark:text-green-200 px-1.5 py-0.5 rounded-full ml-2">+15%</span>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <div class="flex items-center">
                                        <div class="flex-shrink-0 h-10 w-10 rounded-lg bg-blue-100 dark:bg-blue-900 flex items-center justify-center">
                                            <span class="text-blue-600 dark:text-blue-400 font-bold">2</span>
                                        </div>
                                        <div class="ml-4">
                                            <p class="text-sm font-medium text-gray-800 dark:text-white">West India</p>
                                            <div class="flex items-center mt-1">
                                                <span class="text-sm text-blue-600 dark:text-blue-400 font-bold">₹45.20</span>
                                                <span class="text-xs bg-blue-100 dark:bg-blue-900 text-blue-800 dark:text-blue-200 px-1.5 py-0.5 rounded-full ml-2">+12%</span>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <div class="flex items-center">
                                        <div class="flex-shrink-0 h-10 w-10 rounded-lg bg-purple-100 dark:bg-purple-900 flex items-center justify-center">
                                            <span class="text-purple-600 dark:text-purple-400 font-bold">3</span>
                                        </div>
                                        <div class="ml-4">
                                            <p class="text-sm font-medium text-gray-800 dark:text-white">South India</p>
                                            <div class="flex items-center mt-1">
                                                <span class="text-sm text-purple-600 dark:text-purple-400 font-bold">₹42.30</span>
                                                <span class="text-xs bg-purple-100 dark:bg-purple-900 text-purple-800 dark:text-purple-200 px-1.5 py-0.5 rounded-full ml-2">+8%</span>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <div class="flex items-center">
                                        <div class="flex-shrink-0 h-10 w-10 rounded-lg bg-gray-100 dark:bg-gray-600 flex items-center justify-center">
                                            <span class="text-gray-600 dark:text-gray-300 font-bold">4</span>
                                        </div>
                                        <div class="ml-4">
                                            <p class="text-sm font-medium text-gray-800 dark:text-white">East India</p>
                                            <div class="flex items-center mt-1">
                                                <span class="text-sm text-gray-600 dark:text-gray-400 font-bold">₹40.10</span>
                                                <span class="text-xs bg-gray-100 dark:bg-gray-900 text-gray-800 dark:text-gray-200 px-1.5 py-0.5 rounded-full ml-2">-3%</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="mt-8 overflow-x-auto">
                        <table class="min-w-full divide-y divide-gray-200 dark:divide-gray-700">
                            <thead class="bg-gray-50 dark:bg-gray-700">
                                <tr>
                                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 dark:text-gray-300 uppercase tracking-wider">Region</th>
                                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 dark:text-gray-300 uppercase tracking-wider">Current Price</th>
                                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 dark:text-gray-300 uppercase tracking-wider">Monthly Change</th>
                                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 dark:text-gray-300 uppercase tracking-wider">Demand Level</th>
                                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 dark:text-gray-300 uppercase tracking-wider">Supply Status</th>
                                </tr>
                            </thead>
                            <tbody class="bg-white dark:bg-gray-800 divide-y divide-gray-200 dark:divide-gray-700">
                                <tr class="hover:bg-gray-50 dark:hover:bg-gray-700">
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <div class="flex items-center">
                                            <div class="flex-shrink-0 h-10 w-10 rounded-full bg-green-100 dark:bg-green-900 flex items-center justify-center">
                                                <i class="fas fa-map-marker-alt text-green-600 dark:text-green-400"></i>
                                            </div>
                                            <div class="ml-4">
                                                <div class="text-sm font-medium text-gray-900 dark:text-white">North India</div>
                                                <div class="text-sm text-gray-500 dark:text-gray-400">Delhi, Punjab, Haryana</div>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <div class="text-sm font-bold text-gray-900 dark:text-white">₹48.50</div>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <span class="px-2 py-1 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 dark:bg-green-900 text-green-800 dark:text-green-200">
                                            +15%
                                        </span>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <div class="flex items-center">
                                            <div class="h-2.5 w-2.5 rounded-full bg-green-500 mr-2"></div>
                                            <span class="text-sm text-gray-900 dark:text-white">High</span>
                                        </div>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500 dark:text-gray-400">
                                        <div class="flex items-center">
                                            <div class="h-2.5 w-2.5 rounded-full bg-yellow-500 mr-2"></div>
                                            <span>Moderate</span>
                                        </div>
                                    </td>
                                </tr>
                                
                                <tr class="hover:bg-gray-50 dark:hover:bg-gray-700">
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <div class="flex items-center">
                                            <div class="flex-shrink-0 h-10 w-10 rounded-full bg-blue-100 dark:bg-blue-900 flex items-center justify-center">
                                                <i class="fas fa-map-marker-alt text-blue-600 dark:text-blue-400"></i>
                                            </div>
                                            <div class="ml-4">
                                                <div class="text-sm font-medium text-gray-900 dark:text-white">West India</div>
                                                <div class="text-sm text-gray-500 dark:text-gray-400">Maharashtra, Gujarat</div>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <div class="text-sm font-bold text-gray-900 dark:text-white">₹45.20</div>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <span class="px-2 py-1 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 dark:bg-green-900 text-green-800 dark:text-green-200">
                                            +12%
                                        </span>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <div class="flex items-center">
                                            <div class="h-2.5 w-2.5 rounded-full bg-green-500 mr-2"></div>
                                            <span class="text-sm text-gray-900 dark:text-white">High</span>
                                        </div>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500 dark:text-gray-400">
                                        <div class="flex items-center">
                                            <div class="h-2.5 w-2.5 rounded-full bg-green-500 mr-2"></div>
                                            <span>High</span>
                                        </div>
                                    </td>
                                </tr>
                                
                                <tr class="hover:bg-gray-50 dark:hover:bg-gray-700">
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <div class="flex items-center">
                                            <div class="flex-shrink-0 h-10 w-10 rounded-full bg-purple-100 dark:bg-purple-900 flex items-center justify-center">
                                                <i class="fas fa-map-marker-alt text-purple-600 dark:text-purple-400"></i>
                                            </div>
                                            <div class="ml-4">
                                                <div class="text-sm font-medium text-gray-900 dark:text-white">South India</div>
                                                <div class="text-sm text-gray-500 dark:text-gray-400">Karnataka, Tamil Nadu</div>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <div class="text-sm font-bold text-gray-900 dark:text-white">₹42.30</div>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <span class="px-2 py-1 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 dark:bg-green-900 text-green-800 dark:text-green-200">
                                            +8%
                                        </span>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <div class="flex items-center">
                                            <div class="h-2.5 w-2.5 rounded-full bg-yellow-500 mr-2"></div>
                                            <span class="text-sm text-gray-900 dark:text-white">Medium</span>
                                        </div>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500 dark:text-gray-400">
                                        <div class="flex items-center">
                                            <div class="h-2.5 w-2.5 rounded-full bg-green-500 mr-2"></div>
                                            <span>High</span>
                                        </div>
                                    </td>
                                </tr>
                                
                                <tr class="hover:bg-gray-50 dark:hover:bg-gray-700">
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <div class="flex items-center">
                                            <div class="flex-shrink-0 h-10 w-10 rounded-full bg-gray-100 dark:bg-gray-600 flex items-center justify-center">
                                                <i class="fas fa-map-marker-alt text-gray-600 dark:text-gray-400"></i>
                                            </div>
                                            <div class="ml-4">
                                                <div class="text-sm font-medium text-gray-900 dark:text-white">East India</div>
                                                <div class="text-sm text-gray-500 dark:text-gray-400">West Bengal, Odisha</div>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <div class="text-sm font-bold text-gray-900 dark:text-white">₹40.10</div>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <span class="px-2 py-1 inline-flex text-xs leading-5 font-semibold rounded-full bg-red-100 dark:bg-red-900 text-red-800 dark:text-red-200">
                                            -3%
                                        </span>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <div class="flex items-center">
                                            <div class="h-2.5 w-2.5 rounded-full bg-red-500 mr-2"></div>
                                            <span class="text-sm text-gray-900 dark:text-white">Low</span>
                                        </div>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500 dark:text-gray-400">
                                        <div class="flex items-center">
                                            <div class="h-2.5 w-2.5 rounded-full bg-yellow-500 mr-2"></div>
                                            <span>Moderate</span>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            
            <!-- Research Reports -->
            <div class="bg-white dark:bg-gray-800 rounded-xl shadow-md overflow-hidden">
                <div class="p-6 pb-4 border-b border-gray-100 dark:border-gray-700">
                    <div class="flex flex-col md:flex-row md:items-center md:justify-between">
                        <div>
                            <h2 class="text-xl font-bold text-gray-800 dark:text-white">Latest Research Reports</h2>
                            <p class="text-sm text-gray-600 dark:text-gray-400 mt-1">Download in-depth analysis and market forecasts</p>
                        </div>
                        <div class="mt-4 md:mt-0">
                            <button class="flex items-center text-sm font-medium text-green-600 dark:text-green-400 hover:text-green-800 dark:hover:text-green-300">
                                View All Reports
                                <i class="fas fa-chevron-right ml-1 text-xs"></i>
                            </button>
                        </div>
                    </div>
                </div>
                
                <div class="p-6">
                    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                        <!-- Report 1 -->
                        <div class="group bg-white dark:bg-gray-700 rounded-xl shadow-md overflow-hidden hover:shadow-lg transition duration-300 border border-gray-100 dark:border-gray-700 hover:border-green-200 dark:hover:border-green-800">
                            <div class="relative h-48 bg-gray-200 dark:bg-gray-600 overflow-hidden">
                                <img src="assets/images/tomato.avif" alt="Tomato Report" class="w-full h-full object-cover group-hover:scale-105 transition duration-500">
                                <div class="absolute top-3 right-3">
                                    <span class="text-xs bg-green-100 dark:bg-green-900 text-green-800 dark:text-green-200 px-2.5 py-1 rounded-full font-medium">New</span>
                                </div>
                            </div>
                            <div class="p-5">
                                <div class="flex items-center mb-3">
                                    <span class="text-xs font-medium bg-blue-100 dark:bg-blue-900 text-blue-800 dark:text-blue-200 px-2 py-1 rounded-full mr-2">Price Analysis</span>
                                    <span class="text-xs text-gray-500 dark:text-gray-400">15 Jul 2023</span>
                                </div>
                                <h4 class="text-lg font-bold text-gray-800 dark:text-white mb-2 group-hover:text-green-600 dark:group-hover:text-green-400 transition duration-300">Tomato Market Outlook 2023</h4>
                                <p class="text-sm text-gray-600 dark:text-gray-300 mb-4">Comprehensive analysis of tomato market trends, pricing, and future projections across major Indian markets.</p>
                                <div class="flex justify-between items-center">
                                    <div class="flex items-center">
                                        <i class="fas fa-file-pdf text-red-500 mr-2"></i>
                                        <span class="text-xs text-gray-500 dark:text-gray-400">PDF, 2.4MB</span>
                                    </div>
                                    <button class="text-green-600 dark:text-green-400 hover:text-green-800 dark:hover:text-green-300 text-sm font-medium flex items-center">
                                        Download <i class="fas fa-download ml-2"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                        
                        <!-- Report 2 -->
                        <div class="group bg-white dark:bg-gray-700 rounded-xl shadow-md overflow-hidden hover:shadow-lg transition duration-300 border border-gray-100 dark:border-gray-700 hover:border-blue-200 dark:hover:border-blue-800">
                            <div class="relative h-48 bg-gray-200 dark:bg-gray-600 overflow-hidden">
                                <img src="assets/images/cold-storage.jpeg" alt="Cold Chain" class="w-full h-full object-cover group-hover:scale-105 transition duration-500">
                                <div class="absolute top-3 right-3">
                                    <span class="text-xs bg-yellow-100 dark:bg-yellow-900 text-yellow-800 dark:text-yellow-200 px-2.5 py-1 rounded-full font-medium">Updated</span>
                                </div>
                            </div>
                            <div class="p-5">
                                <div class="flex items-center mb-3">
                                    <span class="text-xs font-medium bg-purple-100 dark:bg-purple-900 text-purple-800 dark:text-purple-200 px-2 py-1 rounded-full mr-2">Infrastructure</span>
                                    <span class="text-xs text-gray-500 dark:text-gray-400">5 Jul 2023</span>
                                </div>
                                <h4 class="text-lg font-bold text-gray-800 dark:text-white mb-2 group-hover:text-blue-600 dark:group-hover:text-blue-400 transition duration-300">Cold Storage Capacity in India</h4>
                                <p class="text-sm text-gray-600 dark:text-gray-300 mb-4">State-wise analysis of cold storage facilities and capacity utilization for perishable horticulture produce.</p>
                                <div class="flex justify-between items-center">
                                    <div class="flex items-center">
                                        <i class="fas fa-file-pdf text-red-500 mr-2"></i>
                                        <span class="text-xs text-gray-500 dark:text-gray-400">PDF, 3.1MB</span>
                                    </div>
                                    <button class="text-blue-600 dark:text-blue-400 hover:text-blue-800 dark:hover:text-blue-300 text-sm font-medium flex items-center">
                                        Download <i class="fas fa-download ml-2"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                        
                        <!-- Report 3 -->
                        <div class="group bg-white dark:bg-gray-700 rounded-xl shadow-md overflow-hidden hover:shadow-lg transition duration-300 border border-gray-100 dark:border-gray-700 hover:border-purple-200 dark:hover:border-purple-800">
                            <div class="relative h-48 bg-gray-200 dark:bg-gray-600 overflow-hidden">
                                <img src="assets/images/export.jpg" alt="Export" class="w-full h-full object-cover group-hover:scale-105 transition duration-500">
                                <div class="absolute top-3 right-3">
                                    <span class="text-xs bg-red-100 dark:bg-red-900 text-red-800 dark:text-red-200 px-2.5 py-1 rounded-full font-medium">Trending</span>
                                </div>
                            </div>
                            <div class="p-5">
                                <div class="flex items-center mb-3">
                                    <span class="text-xs font-medium bg-green-100 dark:bg-green-900 text-green-800 dark:text-green-200 px-2 py-1 rounded-full mr-2">Export</span>
                                    <span class="text-xs text-gray-500 dark:text-gray-400">28 Jun 2023</span>
                                </div>
                                <h4 class="text-lg font-bold text-gray-800 dark:text-white mb-2 group-hover:text-purple-600 dark:group-hover:text-purple-400 transition duration-300">Export Opportunities for Horticulture</h4>
                                <p class="text-sm text-gray-600 dark:text-gray-300 mb-4">Key international markets and requirements for Indian horticultural products with compliance guidelines.</p>
                                <div class="flex justify-between items-center">
                                    <div class="flex items-center">
                                        <i class="fas fa-file-pdf text-red-500 mr-2"></i>
                                        <span class="text-xs text-gray-500 dark:text-gray-400">PDF, 4.2MB</span>
                                    </div>
                                    <button class="text-purple-600 dark:text-purple-400 hover:text-purple-800 dark:hover:text-purple-300 text-sm font-medium flex items-center">
                                        Download <i class="fas fa-download ml-2"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    // Dark mode toggle functionality
    const darkModeToggle = document.getElementById('darkModeToggle');
    const html = document.documentElement;

    // Check for saved user preference or use system preference
    const userPrefersDark = window.matchMedia('(prefers-color-scheme: dark)').matches;
    const currentTheme = localStorage.getItem('theme') || (userPrefersDark ? 'dark' : 'light');

    // Apply the current theme
    if (currentTheme === 'dark') {
        html.classList.add('dark');
        darkModeToggle.classList.add('dark');
    }

    // Toggle dark mode
    darkModeToggle.addEventListener('click', () => {
        html.classList.toggle('dark');
        darkModeToggle.classList.toggle('dark');
        
        // Save the preference to localStorage
        const newTheme = html.classList.contains('dark') ? 'dark' : 'light';
        localStorage.setItem('theme', newTheme);
    });

    // Watch for system theme changes
    window.matchMedia('(prefers-color-scheme: dark)').addEventListener('change', e => {
        const newTheme = e.matches ? 'dark' : 'light';
        html.className = newTheme;
        darkModeToggle.className = `dark-mode-toggle ${newTheme === 'dark' ? 'dark' : ''}`;
        localStorage.setItem('theme', newTheme);
    });

    // Advanced Price Trends Chart with ApexCharts
    var priceOptions = {
        series: [{
            name: "Tomato Price",
            data: [32, 38, 42, 45, 40, 48, 52, 50, 55, 60, 58, 65],
            color: '#10B981'
        }],
        chart: {
            height: '100%',
            type: 'area',
            zoom: {
                enabled: true
            },
            toolbar: {
                show: true,
                tools: {
                    download: true,
                    selection: true,
                    zoom: true,
                    zoomin: true,
                    zoomout: true,
                    pan: true,
                    reset: true
                }
            }
        },
        dataLabels: {
            enabled: false
        },
        stroke: {
            curve: 'smooth',
            width: 2
        },
        fill: {
            type: 'gradient',
            gradient: {
                shadeIntensity: 1,
                opacityFrom: 0.7,
                opacityTo: 0.3,
                stops: [0, 90, 100]
            }
        },
        xaxis: {
            categories: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'],
            axisBorder: {
                show: false
            },
            axisTicks: {
                show: false
            },
            tooltip: {
                enabled: true
            }
        },
        yaxis: {
            labels: {
                formatter: function (value) {
                    return "₹" + value;
                }
            }
        },
        tooltip: {
            y: {
                formatter: function (value) {
                    return "₹" + value + " per kg";
                }
            }
        },
        grid: {
            borderColor: '#f1f1f1',
            strokeDashArray: 3,
            xaxis: {
                lines: {
                    show: false
                }
            }
        },
        markers: {
            size: 5,
            colors: ['#10B981'],
            strokeColors: '#fff',
            strokeWidth: 2,
            hover: {
                size: 7
            }
        }
    };

    var priceChart = new ApexCharts(document.querySelector("#advancedPriceChart"), priceOptions);
    priceChart.render();

    // Regional Map Chart
    var regionalOptions = {
        series: [{
            data: [
                {x: 'North', y: 48.5},
                {x: 'West', y: 45.2},
                {x: 'South', y: 42.3},
                {x: 'East', y: 40.1}
            ]
        }],
        legend: {
            show: false
        },
        chart: {
            height: '100%',
            type: 'treemap',
            toolbar: {
                show: false
            }
        },
        colors: [
            '#10B981',
            '#3B82F6',
            '#8B5CF6',
            '#F59E0B'
        ],
        plotOptions: {
            treemap: {
                distributed: true,
                enableShades: false
            }
        },
        dataLabels: {
            enabled: true,
            style: {
                fontSize: '14px',
                fontWeight: 'bold'
            },
            formatter: function(text, op) {
                return [text, "₹" + op.value + "/kg"]
            },
            offsetY: -4
        },
        tooltip: {
            y: {
                formatter: function(value) {
                    return "Avg. Price: ₹" + value + " per kg";
                }
            }
        }
    };

    var regionalChart = new ApexCharts(document.querySelector("#regionalMapChart"), regionalOptions);
    regionalChart.render();

    // Update charts when dropdowns change
    document.getElementById('cropSelect').addEventListener('change', function() {
        // Simulate loading new data
        priceChart.updateSeries([{
            name: this.value + " Price",
            data: Array.from({length: 12}, () => Math.floor(Math.random() * 30) + 30)
        }]);
    });
    
    document.getElementById('marketSelect').addEventListener('change', function() {
        // Simulate loading new data
        regionalChart.updateSeries([{
            data: [
                {x: 'North', y: Math.floor(Math.random() * 10) + 40},
                {x: 'West', y: Math.floor(Math.random() * 10) + 38},
                {x: 'South', y: Math.floor(Math.random() * 10) + 35},
                {x: 'East', y: Math.floor(Math.random() * 10) + 32}
            ]
        }]);
    });
</script>
</body>
</html>
<?php include 'includes/footer.php'; ?>