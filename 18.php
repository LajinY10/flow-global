a=12345
try=0
puts "WELCOME TO THE BANK OF MITCHELL."
puts" you have only 3 tries"
puts "enter your pin:"
pin=gets.to_i
try+=1
while pin!=a && try <3
    puts "incorrect pin ..try again !!"
    puts "enter your pin:"
    pin=gets.to_i
    try+=1
end
if(pin==a)
puts "pin accepted"
else
puts "incorrect pin"
puts "3 tries are over"
end
