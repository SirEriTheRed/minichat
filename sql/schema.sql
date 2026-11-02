drop table message;

create table comment(
  comment_id int,
  comment_text varchar,
  comment_user_name varchar,
  constraint primary_key_comment primary_key (comment_id)
);

insert into message valies(1, "Hellow world, how are you today?", "I, robot");
