Create DATABASE general_ToDOTasks;

create TABLE tasks(
    `id` int PRIMARY KEY AUTO_INCREMENT,
    `imagepath` varchar(200) not null,
    `name` varchar(50),
    `from` varchar(50) not null,
    `to` varchar(50) not null,
    `taskname` varchar(100) not null 
    );