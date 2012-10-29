/* *****
 * User defined fade objects and messages
 *
 * These messages are used in fades triggered by mouseovers and
 * mouseouts on table cells.  They are the simplest type of fade and
 * require no extra Javascript code.
 */
var fader = new Array();

fader[0] = new fadeObject('fade0', 'dddddd', '000000', 20, 20);
fader[0].msg[0] = "This is an optional default message; the fade object on the right side has no default.  Mouseover each topic to make quotes fade in and out.";
fader[0].msg[1] = "Nowhere can a man find a quieter or more untroubled retreat than in his own soul.<br />- Marcus Aurelius";
fader[0].msg[2] = "Feeding the starving poor only increases their number.<br />- Ben Bova";
fader[0].msg[3] = "The limits of tyrants are prescribed by the endurance of those whom they oppose.<br />- Frederick Douglass";
fader[0].msg[4] = "The foolish man seeks happiness in the distance, the wise grows it under his feet.<br />- James Oppenheim";

fader[1] = new fadeObject('fade1', 'bbbbbb', '000000', 20, 20);
fader[1].msg[1] = "Success is relative. It is what we can make of the mess we have made of things.<br />- T.S. Eliot";
fader[1].msg[2] = "We have two ears and one mouth so we may listen more and talk the less.<br />- Epictetus";
fader[1].msg[3] = "It is better to be violent, if there is violence in our hearts, than to put on the cloak of nonviolence to cover impotence.<br />- Mahatma Gandhi";
fader[1].msg[4] = "Don't part with your illusions. When they are gone you may still exist, but you have ceased to live.<br />- Mark Twain";



/* *****
 * The code below describes how to make a throbbing or automatic fade
 * sequence of messages.  It is important to note that this function is
 * NOT part of the Buffered Text-Fade Effect, but merely an example of
 * how it can be used.  In this example, the throb() function controls
 * the commands which are sent to the fade engine; it is called
 * repeatedly at set time intervals rather than using mouseover events
 * as triggers.
 *
 * Notes:
 * - A global array "hash" is used to keep track of where each
 *   animation is currently in the sequence.
 * - The list of messages defined in the fader *must* start at one (1)
 *   and count upwards without skipping any integers.
 * - The third line of the throb() function controls how fast
 *   commands get sent to the fade engine.  It waits only 100 milli-
 *   seconds when fading out, but 5000 milliseconds (5 seconds) when
 *   fading in; this means the message will remain visible for about 5
 *   seconds before fading out again.
 *
 * Other types of fade animation are possible simply by designing
 * different ways to control the fade-ins and fade-outs!
 */
var hash = new Array();
function throb(item) {

  // If the hash array does not have an entry for this item, initialise it at 2
  if (!hash[item]) hash[item] = 0;

  // Send a fade command, using the hash array to tell us what parameters we should use
  fader[item].fade(Math.floor(hash[item] / 2), !(hash[item] % 2));

  // Call this function again for this same item after a certain amount of time
  setTimeout(function() { throb(item); }, (hash[item] % 2) ? 100 : 7000);

  // If we have exceeded the number of messages in this fader, start over again at 2
  if (++hash[item] > fader[item].msg.length * 2 - 1) hash[item] = 0;
}

fader[2] = new fadeObject('fade2', 'bbbbbb', '000000', 20, 20);
fader[2].msg[0] = "<i>Harness the power of cloud computing to scale up your <strong>video</strong> and scale down your costs.</i>";
fader[2].msg[1] = "<i>On our shortlist of video platforms optimized for high traffic and low costs.</i><br /><div class='quote_credit'>&mdash;<strong>Pure Digital</strong>&trade;, a CISCO&trade; Co.</div>&nbsp;";
fader[2].msg[2] = "<i>Hands-down, dead-stop, the best platform for <strong>user-generated video</strong>.</i><div class='quote_credit'>&mdash;<strong>Matt Herron</strong>, Vice President, MTV&trade; Networks</div><br />&nbsp;";
fader[2].msg[3] = "<i>It's like crowd-sourcing for my video&mdash;tapping my own workforce of videographers.</i><div class='quote_credit'>&mdash;<strong>John Siloco</strong>, Publisher, IZNO TV&trade;</div>";
fader[2].msg[4] = "<i>Simple and powerful. The control and pricing are unbeatable.</i><div class='quote_credit'>&mdash;<strong>Ian Faust</strong>, Publisher, Upstairs&trade;</div>";

// Start this fader
setTimeout(function() { throb(2); }, 100);