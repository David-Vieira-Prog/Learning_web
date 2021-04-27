function Person(first, last, age, gender, interests) {
    this.name = {
        'first': first,
        'last': last
    };
    this.age = age;

    this.gender = gender;
    this.interests = interests;
    this.bio = function () {
        this.gender === "male" ? console.log(this.name.first + ' ' + this.name.last + ' is ' + this.age + ' years old. He likes ' + this.interests[0] + ' and ' + this.interests[1] + '.') :
            console.log(this.name.first + ' ' + this.name.last + ' is ' + this.age + ' years old. She likes ' + this.interests[0] + ' and ' + this.interests[1] + '.');


    };
    this.greeting = function () {
        alert('Hi! I\'m ' + this.name.first + '.');
    };
}

// var me = new Person("David", "Vieira", 18, "female", ["Progamation", "Academy"])

// me.bio()

var person = new Object()
