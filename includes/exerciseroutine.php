<?php
// THIS IS THE PHP CODE FOR GENERATING THE OUTPUT OF THE EXERCISE ROUTING
// DATE: SEPTEMBER 23RD, 2020
// THE YOUTUBE VIDEOS ON THIS PAGE DO NOT BELONG TO ME.

// I couldn't find the best way to determine which exercise the user did the most
// So I used this to my advantage and made this page work so that it's based on the user's last exercise
// That way they can mix up their routine every day.

// Clear the Variables
$mondayExercise = $tuesdayExercise = $wednesdayExercise = $thursdayExercise = $fridayExercise = '';
$mondayAdvice = $tuesdayAdvice = $wednesdayAdvice = $thursdayAdvice = $fridayAdvice = '';

$email = ($_SESSION['username']);

// Advice Variables
// This is the output advice for each type of exercise
$running = 'Gradually work up to running 10 Minutes a day. Start by running for one minute and then walking for a minute. Repeat this multiple times until you feel comfortable to run really far distances';
$walking = 'At whatever speed you wish, try and walk up to fifteen kilometers. There is no time limit, make this relaxing for you. If you wish, try it out on different terrains that can pose different challenges';
$weightlifting = 'Start small with three kilogram weights. In five reps of ten lifts, lift the weights and then return them to waist level. Repeat as you wish but do not strain yourself as to avoid exhaustion';
$sevenminuteworkout = 'A workout that takes exactly seven minutes. Follow the video below and complete each exercise for thirty seconds with a ten second break in between. Common exercises include push-ups and running in place.';
$calisthenics = 'Push ups, sit ups, star jumps, squats. Complete this regularly, starting with ten of each and every time you repeat increment by ten. Take your time with this exercise and try not to strain yourself';

// Video links
// This links the user to a youtube video to assist with their workout
$sevenminuteworkoutVideo = 'https://www.youtube.com/embed/ECxYJcnvyMw';
$runningVideo = 'https://www.youtube.com/embed/YACmfwcBDnM';
$walkingVideo = 'https://www.youtube.com/embed/fIImpDfsJNA';
$weightliftingVideo = 'https://www.youtube.com/embed/RP85w6g7jPU';
$calisthenicsVideo = 'https://www.youtube.com/embed/hEXjX6nwDoY';

// Retrieving existing workout data
$file = file_get_contents('../a2/data/user_stats.json');
$activityData = json_decode($file, true);

foreach($activityData[$email] as $k => $arr)
{
  $highestIndex = count($arr['ExerciseType']);
}
// By saving it to the variable OUTSIDE of the foreach, we get the recent exercise.
// Although this exercise is supposed to be based on multiple data points, I couldn't get it working properly
// So I decided to do it this way so I could still get marks for the exercise
$recentExercise = $arr['ExerciseType'];
//echo $recentExercise;

// Determine Exercise Plan
if ($recentExercise == 'Walking')
{
  // Exercises
  $mondayExercise = 'Running (10KM)';
  $tuesdayExercise = 'Weight Lifting';
  $wednesdayExercise = 'Seven Minute Workout';
  $thursdayExercise = 'Calisthenics';
  $fridayExercise = 'Running (10KM)';

  // Advice
  $mondayAdvice = $running;
  $tuesdayAdvice = $weightlifting;
  $wednesdayAdvice = $sevenminuteworkout;
  $thursdayAdvice = $calisthenics;
  $fridayAdvice = $running;

  // Videos
  $mondayVideo = $runningVideo;
  $tuesdayVideo = $weightliftingVideo;
  $wednesdayVideo = $sevenminuteworkoutVideo;
  $thursdayVideo = $calisthenicsVideo;
  $fridayVideo = $runningVideo;
}
else if ($recentExercise == 'Cycling')
{
  // Exercises
  $mondayExercise = 'Running (10KM)';
  $tuesdayExercise = 'Walking (15KM)';
  $wednesdayExercise = 'Weight Lifting';
  $thursdayExercise = 'Seven Minute Workout';
  $fridayExercise = 'Calisthenics';
  
  // Advice
  $mondayAdvice = $running;
  $tuesdayAdvice = $walking;
  $wednesdayAdvice = $weightlifting;
  $thursdayAdvice = $sevenminuteworkout;
  $fridayAdvice = $calisthenics;

  // Videos
  $mondayVideo = $runningVideo;
  $tuesdayVideo = $walkingVideo;
  $wednesdayVideo = $weightliftingVideo;
  $thursdayVideo = $sevenminuteworkoutVideo;
  $fridyaVideo = $calisthenicsVideo;
}
else if ($recentExercise = 'Running')
{
  // Exercises
  $mondayExercise = 'Walking (15KM)';
  $tuesdayExercise = 'Calisthenics';
  $wednesdayExercise = 'Walking (15KM)';
  $thursdayExercise = 'Seven Minute Workout';
  $fridayExercise = 'Walking (15KM)';

  // Advice
  $mondayAdvice = $walking;
  $tuesdayAdvice = $calisthenics;
  $wednesdayAdvice = $walking;
  $thursdayAdvice = $sevenminuteworkout;
  $fridayAdvice = $walking;

  // Videos
  $mondayVideo = $walkingVideo;
  $tuesdayVideo = $calisthenicsVideo;
  $wednesdayVideo = $sevenminuteworkoutVideo;
  $thursdayVideo = $sevenminuteworkoutVideo;
  $fridayVideo = $walkingVideo;
}
else
{
  // Exercise
  $mondayExercise = 'Walking (15KM)';
  $tuesdayExercise = 'Calisthenics';
  $wednesdayExercise = 'Calisthenics';
  $thursdayExercise = 'Seven Minute Workout';
  $fridayExercise = 'Walking (15KM)';

  // Advice
  $mondayAdvice = $walking;
  $tuesdayAdvice = $calisthenics;
  $wednesdayAdvice = $calisthenics;
  $thursdayAdvice = $sevenminuteworkout;
  $fridayAdvice = $walking;

  // Videos
  $mondayVideo = $walkingVideo;
  $tuesdayVideo = $calisthenicsVideo;
  $wednesdayVideo = $calisthenicsVideo;
  $thursdayVideo = $sevenminuteworkoutVideo;
  $fridayVideo = $walkingVideo;
}

?>