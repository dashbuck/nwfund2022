# Northwest Fund for the Environment 2022 WordPress Theme

NW Fund is a longstanding Steady Pixel client, having hired one of our staff in 2014 to rebuild their website using a purchased theme. The client was then satisfied with that website until 2021, when the theme began to break down.

The main goals of this build were longevity and ease of use by the client. To that end, I kept things as simple and future-proofed as possible: minimal plugins, Block Editor, and a default parent theme.

## Minimal Plugins 
The fewer plugins installed, the fewer potential breaks or code conflicts. Therefore, this theme is paired with as few plugins as possible:
- Redirection, which automates 301 directs if the client renames pages;
- Disable Comments, as the site is not intended to be where the client interacts with their audience;
- WPForms Lite to provide a contact form.

Redirection and Disable Comments provide simple functions unlikely to conflict with future WordPress updates. Since WPForms is maintained by Awesome Motive, it's unlikely to be abandoned or badly maintained. 

## Block Editor
The client was having a hard time getting a consistent look to their content due to the limitations of the Classic editor. After consideration, I decided to use the Block Editor for their project. The Block Editor would not have been a viable option for this client when it was first released. However, as of 2022, it was good enough that I felt I could trust it to continue to be usable for the forseeable future.

I did some minimal customization to make the block editor easier to use: 
- Swapped out the default colors for the client's brand colors
- Hid core and parent theme block patterns
- Added one custom block pattern for a specific client use case

I also provided documentation and training to the client since the Block Editor was new to them.

## Parent Theme: Twenty Twenty
I chose to start with a default WordPress theme. It was the best way I could ensure that their site would be compatible with future WordPress core and PHP language updates. I evaluated three potential default themes: Twenty Twenty Two, Twenty Twenty One, and Twenty Twenty. All default themes before Twenty Twenty were not designed with the Block Editor in mind.

The Twenty Twenty Two theme would have been my first choice as it was the most recent. Unfortunately, it was in beta at the time, making it bad choice for the sake of both long-term reliability and ease of staff use. Twenty Twenty One had idiosyncracies that made it very difficult to work with, such as Block Editor customizations set in functions.php instead of theme.json.  Twenty Twenty does have its own idiosyncracies, but they are much easier to handle. So, by default, Twenty Twenty was the best choice. 

## TODO
As with most projects, there were things I was forced to leave undone due to budget and time limits. I didn't get a chance to perfectly customize the editor CSS. I would have liked to do more to simplify the block editor - hide unneeded blocks, perhaps provide another pattern or two. 

But, overall, the client was happy with the end product. Unfortunately, shortly before the website was due to launch, the client's two staff members decided to retire at the same time. As a result, the organization is now taking some time to reorganize and asked me to hold off on launching the new design.