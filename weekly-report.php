<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Weekly Report - Green Paradise Farm</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">

</head>
<body class="bg-gradient-to-r from-green-700 to-green-800">
    <div class="container mx-auto px-4 py-8 max-w-6xl">
        <!-- Header with Back Button -->
        <div class="flex justify-between items-center mb-6">
            <a href="dashboard.php" class="text-farm-green hover:text-farm-dark">
                <i class="fas fa-arrow-left mr-2"></i>Back to Dashboard
            </a>
            <h1 class="text-3xl font-bold ">
                <i class="fas fa-calendar-week mr-2"></i>Weekly Farm Report
            </h1>
            <div class="text-sm bg-farm-green text-white px-3 py-1 rounded-full">
                Week 18, 2025
            </div>
        </div>

        <!-- Report Summary Cards -->
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-8">
            <!-- Weather Summary -->
            <div class="bg-white rounded-xl shadow-md p-6 border-l-4 border-blue-500">
                <div class="flex justify-between items-start">
                    <div>
                        <h3 class="font-bold text-gray-700 mb-1">Weather Conditions</h3>
                        <p class="text-sm text-gray-500">April 07-13, 2025</p>
                    </div>
                    <i class="fas fa-cloud-sun text-2xl text-blue-400"></i>
                </div>
                <div class="mt-4">
                    <div class="flex justify-between py-2 border-b">
                        <span>Average Temp:</span>
                        <span class="font-semibold">28°C</span>
                    </div>
                    <div class="flex justify-between py-2 border-b">
                        <span>Rainfall:</span>
                        <span class="font-semibold">42mm</span>
                    </div>
                    <div class="flex justify-between py-2">
                        <span>Sun Hours:</span>
                        <span class="font-semibold">38 hours</span>
                    </div>
                </div>
            </div>

            <!-- Harvest Summary -->
            <div class="bg-white rounded-xl shadow-md p-6 border-l-4 border-farm-green">
                <div class="flex justify-between items-start">
                    <div>
                        <h3 class="font-bold text-gray-700 mb-1">Harvest Summary</h3>
                        <p class="text-sm text-gray-500">This Week's Yield</p>
                    </div>
                    <i class="fas fa-basket-shopping text-2xl text-farm-green"></i>
                </div>
                <div class="mt-4">
                    <div class="flex justify-between py-2 border-b">
                        <span>Tomatoes:</span>
                        <span class="font-semibold">245 kg</span>
                    </div>
                    <div class="flex justify-between py-2 border-b">
                        <span>Dragon Fruit:</span>
                        <span class="font-semibold">180 pieces</span>
                    </div>
                    <div class="flex justify-between py-2">
                        <span>Leafy Greens:</span>
                        <span class="font-semibold">85 bunches</span>
                    </div>
                </div>
            </div>

            <!-- Tasks Summary -->
            <div class="bg-white rounded-xl shadow-md p-6 border-l-4 border-amber-500">
                <div class="flex justify-between items-start">
                    <div>
                        <h3 class="font-bold text-gray-700 mb-1">Completed Tasks</h3>
                        <p class="text-sm text-gray-500">Work Progress</p>
                    </div>
                    <i class="fas fa-clipboard-check text-2xl text-amber-500"></i>
                </div>
                <div class="mt-4">
                    <div class="flex justify-between py-2 border-b">
                        <span>Irrigation:</span>
                        <span class="font-semibold">7/7 days</span>
                    </div>
                    <div class="flex justify-between py-2 border-b">
                        <span>Pest Control:</span>
                        <span class="font-semibold">3 fields</span>
                    </div>
                    <div class="flex justify-between py-2">
                        <span>New Plantings:</span>
                        <span class="font-semibold">120 saplings</span>
                    </div>
                </div>
            </div>
        </div>

        <!-- Detailed Sections -->
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-8">
            <!-- Crop Progress -->
            <div class="bg-white rounded-xl shadow-md p-6">
                <h2 class="text-xl font-bold text-farm-dark mb-4 border-b pb-2">
                    <i class="fas fa-seedling mr-2"></i>Crop Progress
                </h2>
                
                <div class="mb-6">
                    <h3 class="font-semibold text-gray-800 mb-2">Potatoes</h3>
                    <div class="flex items-center mb-1">
                        <span class="w-24 text-sm text-gray-600">Growth Stage:</span>
                        <span class="font-medium">Flowering (Week 5/8)</span>
                    </div>
                    <div class="w-full bg-gray-200 rounded-full h-2.5 mb-3">
                        <div class="bg-farm-green h-2.5 rounded-full" style="width: 62%"></div>
                    </div>
                    <p class="text-sm text-gray-600">
                        <i class="fas fa-info-circle mr-1 text-farm-light"></i>
                        85% of plants showing healthy flowers. Expect first harvest in 3 weeks.
                    </p>
                </div>
                
                <div class="mb-6">
                    <h3 class="font-semibold text-gray-800 mb-2">Tomatoes</h3>
                    <div class="flex items-center mb-1">
                        <span class="w-24 text-sm text-gray-600">Growth Stage:</span>
                        <span class="font-medium">Harvesting (Week 10/12)</span>
                    </div>
                    <div class="w-full bg-gray-200 rounded-full h-2.5 mb-3">
                        <div class="bg-farm-green h-2.5 rounded-full" style="width: 83%"></div>
                    </div>
                    <p class="text-sm text-gray-600">
                        <i class="fas fa-info-circle mr-1 text-farm-light"></i>
                        Peak harvest period. Yield slightly higher than expected (+12%).
                    </p>
                </div>
                
                <div class="mb-4">
                    <h3 class="font-semibold text-gray-800 mb-2">New Plantings</h3>
                    <div class="flex items-center mb-1">
                        <span class="w-24 text-sm text-gray-600">Avocado:</span>
                        <span class="font-medium">40 saplings (Week 1/156)</span>
                    </div>
                    <div class="flex items-center">
                        <span class="w-24 text-sm text-gray-600">Kiwi:</span>
                        <span class="font-medium">80 saplings (Week 1/104)</span>
                    </div>
                </div>
            </div>

            <!-- Issues & Actions -->
            <div class="bg-white rounded-xl shadow-md p-6">
                <h2 class="text-xl font-bold text-farm-dark mb-4 border-b pb-2">
                    <i class="fas fa-exclamation-triangle mr-2"></i>Issues & Actions
                </h2>
                
                <div class="space-y-4">
                    <div class="border-l-4 border-red-400 pl-4 py-1">
                        <h3 class="font-semibold text-gray-800">Pest Alert: Aphids in Tomato Field 2</h3>
                        <p class="text-sm text-gray-600 mb-2">
                            Detected on April 12. Mild infestation affecting about 15% of plants.
                        </p>
                        <div class="bg-amber-50 p-2 rounded text-sm">
                            <span class="font-medium">Action Taken:</span> Applied neem oil solution (3 applications). Monitoring daily.
                        </div>
                    </div>
                    
                    <div class="border-l-4 border-amber-400 pl-4 py-1">
                        <h3 class="font-semibold text-gray-800">Irrigation System Repair</h3>
                        <p class="text-sm text-gray-600 mb-2">
                            Drip line leak detected in Dragon Fruit section on April 14.
                        </p>
                        <div class="bg-amber-50 p-2 rounded text-sm">
                            <span class="font-medium">Action Taken:</span> Repaired same day. No significant water loss.
                        </div>
                    </div>
                    
                    <div class="border-l-4 border-blue-400 pl-4 py-1">
                        <h3 class="font-semibold text-gray-800">Soil Test Results</h3>
                        <p class="text-sm text-gray-600 mb-2">
                            Received April 15. Field 3 shows slightly low nitrogen levels.
                        </p>
                        <div class="bg-amber-50 p-2 rounded text-sm">
                            <span class="font-medium">Planned Action:</span> Apply organic compost next week. Retest in 4 weeks.
                        </div>
                    </div>
                    
                    <div class="border-l-4 border-green-400 pl-4 py-1">
                        <h3 class="font-semibold text-gray-800">Farm Visitors</h3>
                        <p class="text-sm text-gray-600 mb-2">
                            Agriculture department inspection on April 11. Organic certification renewal.
                        </p>
                        <div class="bg-amber-50 p-2 rounded text-sm">
                            <span class="font-medium">Outcome:</span> Passed with excellent remarks. Certification renewed for 2 years.
                        </div>
                    </div>
                </div>
            </div>

            <!-- Harvest Details -->
            <div class="bg-white rounded-xl shadow-md p-6">
                <h2 class="text-xl font-bold text-farm-dark mb-4 border-b pb-2">
                    <i class="fas fa-basket-shopping mr-2"></i>Harvest Details
                </h2>
                
                <div class="overflow-x-auto">
                    <table class="min-w-full divide-y divide-gray-200">
                        <thead class="bg-gray-50">
                            <tr>
                                <th class="px-4 py-2 text-left text-xs font-medium text-gray-500 uppercase">Crop</th>
                                <th class="px-4 py-2 text-left text-xs font-medium text-gray-500 uppercase">Qty</th>
                                <th class="px-4 py-2 text-left text-xs font-medium text-gray-500 uppercase">Quality</th>
                                <th class="px-4 py-2 text-left text-xs font-medium text-gray-500 uppercase">Market Price</th>
                            </tr>
                        </thead>
                        <tbody class="bg-white divide-y divide-gray-300">
                            <tr>
                                <td class="px-4 py-2 text-sm font-medium text-gray-900">Tomatoes </td>
                                <td class="px-4 py-2 text-sm text-gray-500">145 kg</td>
                                <td class="px-4 py-2 text-sm text-gray-500">
                                    <span class="px-2 py-1 bg-green-100 text-green-800 rounded-full text-xs">Grade A (92%)</span>
                                </td>
                                <td class="px-4 py-2 text-sm text-gray-500">₹45/kg</td>
                            </tr>
                            <tr>
                                <td class="px-4 py-2 text-sm font-medium text-gray-900">Potatoes</td>
                                <td class="px-4 py-2 text-sm text-gray-500">100 kg</td>
                                <td class="px-4 py-2 text-sm text-gray-500">
                                    <span class="px-2 py-1 bg-green-100 text-green-800 rounded-full text-xs">Grade A (88%)</span>
                                </td>
                                <td class="px-4 py-2 text-sm text-gray-500">₹22/kg</td>
                            </tr>
                            <tr>
                                <td class="px-4 py-2 text-sm font-medium text-gray-900">Onions</td>
                                <td class="px-4 py-2 text-sm text-gray-500">180 pieces</td>
                                <td class="px-4 py-2 text-sm text-gray-500">
                                    <span class="px-2 py-1 bg-amber-100 text-amber-800 rounded-full text-xs">Grade B (75%)</span>
                                </td>
                                <td class="px-4 py-2 text-sm text-gray-500">₹30/kg</td>
                            </tr>
                            <tr>
                                <td class="px-4 py-2 text-sm font-medium text-gray-900">Banana</td>
                                <td class="px-4 py-2 text-sm text-gray-500">45 bunches</td>
                                <td class="px-4 py-2 text-sm text-gray-500">
                                    <span class="px-2 py-1 bg-green-100 text-green-800 rounded-full text-xs">Grade A (95%)</span>
                                </td>
                                <td class="px-4 py-2 text-sm text-gray-500">₹60/dozen</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                
                <div class="mt-4 p-3 bg-blue-50 rounded-lg border border-blue-100">
                    <h3 class="font-semibold text-blue-800 mb-1">Market Notes</h3>
                    <p class="text-sm text-blue-700">
                        Tomato prices up 15% due to increased demand. Banana quality slightly lower this week
                        due to irregular pollination (add more beehives?). Onion continues to get premium prices.
                    </p>
                </div>
            </div>

            <!-- Next Week Plan -->
            <div class="bg-white rounded-xl shadow-md p-6">
                <h2 class="text-xl font-bold text-farm-dark mb-4 border-b pb-2">
                    <i class="fas fa-calendar-check mr-2"></i>Next Week Plan
                </h2>
                
                <div class="space-y-4">
                    <div class="flex items-start">
                        <div class="bg-farm-green text-white p-2 rounded-lg mr-3 mt-1">
                            <i class="fas fa-tint"></i>
                        </div>
                        <div>
                            <h3 class="font-semibold text-gray-800">Irrigation Schedule</h3>
                            <p class="text-sm text-gray-600">
                                Reduce tomato field watering to 3x/week as harvest concludes. 
                                Increase dragon fruit to 4x/week during flowering.
                            </p>
                        </div>
                    </div>
                    
                    <div class="flex items-start">
                        <div class="bg-farm-green text-white p-2 rounded-lg mr-3 mt-1">
                            <i class="fas fa-bug"></i>
                        </div>
                        <div>
                            <h3 class="font-semibold text-gray-800">Pest Management</h3>
                            <p class="text-sm text-gray-600">
                                Continue neem oil application in tomato field 2 (M-W-F). 
                                Monitor dragon fruit for mealybugs with expected warm weather.
                            </p>
                        </div>
                    </div>
                    
                    <div class="flex items-start">
                        <div class="bg-farm-green text-white p-2 rounded-lg mr-3 mt-1">
                            <i class="fas fa-seedling"></i>
                        </div>
                        <div>
                            <h3 class="font-semibold text-gray-800">New Plantings</h3>
                            <p class="text-sm text-gray-600">
                                Prepare field 4 for next tomato rotation (40 saplings). 
                                Start basil and coriander in nursery trays for intercropping.
                            </p>
                        </div>
                    </div>
                    
                    <div class="flex items-start">
                        <div class="bg-farm-green text-white p-2 rounded-lg mr-3 mt-1">
                            <i class="fas fa-truck"></i>
                        </div>
                        <div>
                            <h3 class="font-semibold text-gray-800">Harvest & Sales</h3>
                            <p class="text-sm text-gray-600">
                                Focus harvest on Tuesday/Thursday for weekend farmers market. 
                                Contact organic store buyers for bulk tomato order.
                            </p>
                        </div>
                    </div>
                    
                    <div class="flex items-start">
                        <div class="bg-farm-green text-white p-2 rounded-lg mr-3 mt-1">
                            <i class="fas fa-users"></i>
                        </div>
                        <div>
                            <h3 class="font-semibold text-gray-800">Farm Activities</h3>
                            <p class="text-sm text-gray-600">
                                School visit scheduled Wednesday AM. Prepare educational materials 
                                on organic farming practices.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Download/Print Button -->
        <div class="mt-8 flex justify-center">
            <button class="bg-blue-700 text-white font-medium py-2 px-6 rounded-lg shadow flex items-center">
                <i class="fas fa-file-pdf mr-2 text-red-500"></i> Download PDF Report
            </button>
        </div>
    </div>
</body>
</html>