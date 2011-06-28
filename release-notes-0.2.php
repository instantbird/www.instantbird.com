<h2 class="borderbottom clear-float">What's new?</h2>

<ul>
 <li><strong>Localized</strong> in Finnish, French, Polish and Russian. Support for more languages will come in later releases.</li>
 <li><strong>Redesigned Conversation window</strong>:<ul>
  <li><strong>New tabs</strong>. This release has a new tab system inspired from the tabs of Firefox 3.5. It is now possible to have several conversation windows, reorder tabs with a simple drag&amp;drop or detach a tab to move it into a new window. When the window is too small to hold all the tabs, the list of tabs is able to scroll.</li>
  <li><strong>Message styles</strong> system similar to the one used in Adium. A few cool themes are built-in.</li>
  <li><strong>Emoticons</strong> are now replaced by images, and there is a theme system for these sets of images.</li>
  <li><strong>Context menu</strong> with search engines integration.</li>
  <li><strong>Improved copying of messages</strong>. When selecting several messages in a conversation and copying them to the clipboard, they will be formatted in a way suitable for pasting as a citation, for example in an email.</li>
  <li><strong>Message filtering</strong>. For security, undesired HTML markup is filtered out of IMs before displaying them.</li>
 </ul></li>
 <li><strong>Preferences window</strong>: Instantbird finally has a preferences window. Even though it will look very familiar to users of Firefox or Thunderbird, it contains lots of options that are very specific to Instantbird.</li>
 <li><strong>Visual refresh</strong>: The conversations windows, the buddy list and the account manager have been visually simplified to improve their usability, especially when resized to small windows.</li>
 <li>Better <strong>status handling</strong>:<ul>
  <li><strong>status toolbar</strong> at the top of the buddy list allowing quick status message changes.</li>
  <li><strong>offline status</strong> to quickly disconnect all accounts and reconnect when back online. The status is changed to offline automatically when the network link goes down, and is changed back to its previous state when the link is back, reconnecting accounts automatically.</li>
  <li>Better control on the idle and auto-away behaviors.</li>
  <li><code>/away</code>, <code>/busy</code>, <code>/dnd</code>, <code>/back</code> and <code>/offline</code> commands usable from all conversations for quick status changes.</li>
 </ul></li>
 <li>Basic <strong>log viewer</strong> accessible from the buddy list or conversation tab context menus.</li>
 <li><strong>Buddy list context menu</strong>: provides a way to remove buddies, move buddies between groups and an option to show offline buddies.</li>
 <li><strong>Alias</strong> buddies: usable from the buddy list context menu, or with the <code>F2</code> key.</li>
 <li><strong>Protocol plugins</strong> can be loaded as extensions. See our <a href="http://blog.instantbird.org/a9-instantbird-0-2-feature-preview-protocols-as-extensions.html">blog post</a> for more details.</li>
 <li><strong>Installer</strong> on Windows.</li>
 <li><strong>Lots of minor improvements</strong>, among them:<ul>
  <li>Facebook Chat in the list of supported protocols by default (using the XMPP protocol).</li>
  <li>Detailed buddy information in tooltips when hovering conversation tabs.</li>
  <li><strong>Account manager improvements</strong>. The account manager has been slightly enhanced in several ways: addition of a context menu, drag&amp;drop reordering of accounts, better default actions when double clicking, indication of how long an account has been connected, etc.</li>
  <li><strong>Notifications</strong>. Pop-up notifications (using Growl on Mac) of messages arriving when conversation windows are inactive. (Turned off by default.)</li>
  <li><strong>Custom font</strong>. It's now possible to customize the font, size and color of the text of your messages.</li>
  <li><strong>Join chats</strong> is now usable with more protocols (XMPP, ...). It used to work only with IRC.</li>
  <li><strong>Menus cleanup</strong>. Items are more likely to be where you expect them. Menus finally work correctly from any window on Mac.</li>
  <li><strong>Mobile status</strong> is displayed in the buddy list and on conversation tabs.</li>
  <li>Warning when exiting Instantbird if there are new unread IMs. (Can be turned off through a preference.)</li>
  <li><strong>Auto-adaptative textbox</strong>: The input box in conversations will automatically take a size that is suitable based on the size of the window and the amount of text entered.</li>
 </ul></li>
 <li>Under the hood:<ul>
  <li>libpurple statically linked with its dependencies and its default protocol plugins.</li>
  <li>The preference system of libpurple has been plugged into the Mozilla preference system. Now the libpurple preferences are now accessible from about:config.</li>
  <li><a href="http://blog.instantbird.org/a10-instantbird-0-2-feature-preview-localizability.html">Gettext has been replaced</a>.</li>
 </ul></li>
 <li><strong>Updated</strong>: Instantbird 0.2 is based on libpurple 2.6.6 and Mozilla 1.9.2.7.</li>
 <li><strong>Improved stability</strong>: we used the crash reports that we got from the 0.2 pre-releases and nightly builds to fix bugs that resulted in crashes.</li>
<li>And more... read the full <a href="ChangeLog-0.2">ChangeLog</a> for details.</li>
</ul>
