a=12345
puts "WELCOME TO THE BANK OF MITCHELL."
puts "enter your pin:"
pin=gets.to_i
while pin!=a
    puts "incorrect pin ..try again !!"
    puts "enter your pin:"
    pin=gets.to_i
end
puts "pin accepted"
